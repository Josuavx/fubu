<?php 
include_once "../Model/BD/DAODocumento.php";
include_once "../Model/Objetos/Documento.php";
include_once "./SessionController.php";


session_start();

if (isset($_POST['Opcao'])) {
    switch ($_POST['Opcao']) {
        case 'Cadastrar':
            inserirDocumento($_POST);
        case 'Buscar':
            buscarDocumento($_POST);
    }
}

function preencherDocumento($dados)
{
    $documento = new Documento();
    
    //verifica se os indices sao numeros ou chave. Caso for numerico, coloca eles 
    if (array_unique(array_map("is_int", array_keys($dados))) === array(true))
    {
        $documento->setAluno_cpf($dados[0]);
        $documento->setGestor_cpf($dados[1]);
        $documento->setData($dados[2]);
        $documento->setDocumento($dados[3]);
    }
    else
    {
        $documento->setAluno_cpf(isset($dados['Aluno_cpf']) ? $dados['Aluno_cpf'] : '');
        $documento->setGestor_cpf(isset($dados['Gestor_cpf']) ? $dados['Gestor_cpf'] : '');
        $documento->setData(isset($dados['Data']) ? $dados['Data'] : '');
        $documento->setDocumento(isset($dados['Documento']) ? $dados['Documento'] : '');
    }
    
   
    return $documento;
}


function inserirDocumento($dados)
{
    $documento = preencherDocumento($dados);

    $DAODocumento = new DAODocumento();
    
    $resultado = $DAODocumento->inserir($documento);
   

    $_SESSION["resultado"] = $resultado;
    if ($resultado == TRUE)
        $_SESSION["mensagem"] = 'Cadastro realizado com sucesso';
    else
        $_SESSION["mensagem"] = 'Falha ao cadastrar';
    
    $_SESSION["informacao"] = '';
        

    header('Location: http://'. $_SERVER['HTTP_HOST'].'/FUBU/resultado.php', true, 303);
    die();

}


function buscarDocumento($dados)
{
    
    $documento = preencherDocumento($dados);
    
    $DAODocumento = new DAODocumento();
    
    $resultado = $DAODocumento->buscar($documento);

   
        
        //De acordo com o valor resultante da busca, algo acontece da busca
        
        if (is_array($resultado))
        {
            $_SESSION["resultado"] = 1;
            $_SESSION["mensagem"] = 'Busca realizada com sucesso';
            $_SESSION["informacao"] = (array)$resultado;
        }
        elseif ($resultado == 0)
        {
            $_SESSION["resultado"] = $resultado;
            $_SESSION["mensagem"] = 'Erro ao buscar';
            $_SESSION["informacao"] = "";
        }
        elseif ($resultado == 2)
        {
            $_SESSION["resultado"] = (array)$resultado;
            $_SESSION["mensagem"] = 'CPF Nao encontrado';
            $_SESSION["informacao"] = "";
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