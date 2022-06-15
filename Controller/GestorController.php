<?php 
include_once "../Model/BD/DAOGestor.php";
include_once "../Model/Objetos/Gestor.php";
include_once "./SessionController.php";


//session_start();

if (isset($_POST['Opcao'])) {
    switch ($_POST['Opcao']) {
        case 'BuscarGestor':
            buscarGestor($_POST);
            break;
    }
}



function preencherGestor($dados)
{
    $gestor = new Gestor();
    
   // print_r($dados);
   // echo count($dados);

    if (array_unique(array_map("is_int", array_keys($dados))) === array(true))
    {
        $gestor->setCpf($dados[0]);
        $gestor->setEmail($dados[1]);
        $gestor->setSenha($dados[2]);
    }
    else
    {
        $gestor->setCpf(isset($dados['CPF']) ? $dados['CPF'] : '');
        $gestor->setEmail(isset($dados['Email']) ? $dados['Email'] : '');
        $gestor->setSenha(isset($dados['Senha'])? $dados['Senha'] : '');
    }

    return $gestor;

}


function buscarGestor($dados)
{
    //print_r($dados);
    //echo '<br>buscar gestor dados<br>';
    
    $gestor = preencherGestor($dados);

    $DAOGestor = new DAOGestor();
    
    $resultado = $DAOGestor->buscar($gestor);
    
    //echo '<br>  resultado buscar gestor<br>';
    //print_r($resultado);
        //De acordo com o valor resultante da busca, algo acontece da busca
        
        if (is_object($resultado))
        {
            $_SESSION["resultado"] = 1;
            $_SESSION["mensagem"] = 'Busca realizada com sucesso';
            $_SESSION["informacao"] = (array)$resultado;
        }
        elseif ($resultado == 0)
        {
            $_SESSION["resultado"] = $resultado;
            $_SESSION["mensagem"] = 'Erro ao buscar';
            
            echo 'testando1';
        }
        elseif ($resultado == 2)
        {
            $_SESSION["resultado"] = $resultado;
            $_SESSION["mensagem"] = 'CPF Nao encontrado';
            
            echo 'testando3';
        }
        elseif ($resultado == 3)
        {
            $_SESSION["resultado"] = $resultado;
            $_SESSION["mensagem"] = 'Email Nao encontrado';
            
            echo 'testando3';
        }

    
    //Apos realizar a operacao passada, verifica se deve ser redirecionado para outra pagina ou apenas retornar o resultado para outra funcao
    if(isset($dados['destino']))
    {
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/FUBU/'.$dados['destino'], true, 303);
        die();
    }
    
   
    
    return $resultado;
}

?>