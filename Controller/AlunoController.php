<?php 
include_once "../Model/BD/DAOAluno.php";
include_once "../Model/Objetos/Aluno.php";
include_once "./SessionController.php";


session_start();



//$_SESSION["resultado"];
//$_SESSION["mensagem"];
//$_SESSION["informacao"];


//class AlunoController
//{
    //private teste-> new Aluno();

echo '<h3>teste89</h3>';
//echo $_REQUEST[''];

/*if (array_key_exists('first_name', $_POST))
    foreach($_POST->items as $txt)
    {
        echo $txt;
    }
  */  

//print_r($_POST);
//print_r($_SESSION);
    
if (isset($_POST['Opcao'])) {
    print_r($_POST);
    switch ($_POST['Opcao']) {
        case 'a':
                //loginAluno();
                break;
        case 'Cadastrar':
            if(isset($_SESSION['Nome']))
                {
                    foreach($_SESSION as $key=>$value)
                    {
                        $_POST[$key] = $_SESSION[$key];
                    }
                  session_unset();
                  echo '<br>';
                  print_r($_POST);
                }
                inserirAluno($_POST);
                break;
        case 'Buscar': 
                buscarAluno($_POST);
                break;
        case 'Atualizar':
                atualizarAluno($_POST);
                break;
        case 'Deletar':
                deletarAluno($_POST);
                break;
        case 'BuscarPaginado':
                buscarPaginado($_POST);
                break;
    }
}

//de acordo com os dados enviados ao servidor, ele pode criar uma classe Aluno e trabalhar em cima dela
function preencherAluno($dados)
{
    $aluno = new Aluno();
    
        //print_r($dados);
        echo count($dados);
    
    //verifica se os indices sao numeros ou chave. Caso for numerico, coloca eles 
    if (array_unique(array_map("is_int", array_keys($dados))) === array(true))
    {
        $aluno->setCpf($dados[0]);
        $aluno->setRg($dados[1]);
        $aluno->setNome($dados[2]);
        $aluno->setNomeDaMae($dados[3]);
        $aluno->setGenero($dados[4]);
        $aluno->setInstEnsino($dados[5]);
        $aluno->setEmail($dados[6]);
        $aluno->setSenha($dados[7]);
        
        $aluno->setTelefone($dados[8]);
        $aluno->setEnderecoRua($dados[9]);
        $aluno->setEnderecoNumero($dados[10]);
        $aluno->setEnderecoComplemento($dados[11]);
        $aluno->setCEP($dados[12]);
        $aluno->setGestor($dados[13]);
        $aluno->setToken($dados[14]);
    }
    else
    {
        $aluno->setCpf(isset($dados['CPF']) ? $dados['CPF'] : '');
        $aluno->setRg(isset($dados['RG']) ? $dados['RG'] : '');
        $aluno->setNome(isset($dados['Nome'])? $dados['Nome'] : '');
        $aluno->setNomeDaMae(isset($dados['NomeDaMae'])? $dados['NomeDaMae'] : '');
        $aluno->setGenero(isset($dados['Genero'])? $dados['Genero'] : '');
        $aluno->setInstEnsino(isset($dados['InstEnsino'])? $dados['InstEnsino'] : '');
        $aluno->setEmail(isset($dados['Email'])? $dados['Email'] : '');
        $aluno->setSenha(isset($dados['Senha'])? $dados['Senha'] : '');
        
        $aluno->setTelefone(isset($dados['Telefone'])? $dados['Telefone'] : '');
        $aluno->setEnderecoRua(isset($dados['Rua'])? $dados['Rua'] : '');
        $aluno->setEnderecoNumero(isset($dados['Numero'])? $dados['Numero'] : '');
        $aluno->setEnderecoComplemento(isset($dados['Complemento'])? $dados['Complemento'] : '');
        $aluno->setCEP(isset($dados['CEP'])? $dados['CEP'] : '');
        $aluno->setGestor(isset($dados['Gestor']) ? $dados['Gestor'] : 0);
        $aluno->setToken(isset($dados['Token'])? $dados['Token'] : '');
    }
    
    
    return $aluno;
}

function redirecionar($destino)
{
    header('Location: http://'. $_SERVER['HTTP_HOST'].'/FUBU/'.$destino, true, 303);
    die();
}

function preencherSessao($resultado, $mensagem, $informacao)
{
    $_SESSION["resultado"] = $resultado;
    $_SESSION["mensagem"] = $mensagem;
    $_SESSION["informacao"] = $informacao;
}

function inserirAluno($dados)
{
    $aluno = preencherAluno($dados);
    
    /*
    $aluno->setCpf($dados['CPF']);
    $aluno->setRg($dados['RG']);
    $aluno->setNome($dados['Nome']);
    $aluno->setNomeDaMae($dados['NomeDaMae']);
    $aluno->setGenero($dados['Genero']);
    $aluno->setInstEnsino($dados['InstEnsino']);
    $aluno->setEmail($dados['Email']);
    $aluno->setSenha($dados['Senha']);
    $aluno->setTelefone($dados['Telefone']);
    $aluno->setEnderecoRua($dados['Rua']);
    $aluno->setEnderecoNumero($dados['Numero']);
    $aluno->setEnderecoComplemento($dados['Complemento']);
    $aluno->setCEP($dados['CEP']);
    $aluno->setToken($dados['Token']);
    $aluno->setGestor(0);
    */
    
    
    $DAOAluno = new DAOAluno();
    
    $resultado = $DAOAluno->inserir($aluno);
   

    
    if ($resultado == TRUE)
        preencherSessao($resultado, 'Cadastro realizado com sucesso', '');
    else
        preencherSessao($resultado, 'Falha ao cadastrar', '');
        
   //echo print_r($_SESSION);
    
    isset($dados['destino'])? redirecionar($dados['destino']) : '';
    //redirecionar($dados['destino']);
    
    return $resultado;
    
    //header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/resultado.php', true, 303);
    //die();
    //return $resultado;
        //echo $aluno['first_name']; 
        //$first_name =  $_REQUEST['first_name'];
        //$last_name = $_REQUEST['last_name'];
        //$gender =  $_REQUEST['gender'];
        //$address = $_REQUEST['address'];
        //$email = $_REQUEST['email'];
}
        // Taking all 5 values from the form data(input)
        

//Funcao para buscar aluno
function buscarAluno($dados)
{
    print_r($dados);
    echo '<br>buscar aluno dados<br>';
    
    $aluno = preencherAluno($dados);
    
    $DAOAluno = new DAOAluno();
    
    
    
    $resultado = $DAOAluno->buscar($aluno);
        
    echo '<br>  resultado buscar aluno<br>';
   // print_r($resultado);
        //De acordo com o valor resultante da busca, algo acontece da busca
        
        if (is_object($resultado))
        {
            preencherSessao(1, 'Busca realizada com sucesso', $resultado);
          //  $_SESSION["resultado"] = 1;
          //  $_SESSION["mensagem"] = 'Busca realizada com sucesso';
          //  $_SESSION["informacao"] = $resultado;
        }
        elseif ($resultado == 0)
        {
            preencherSessao($resultado, 'Erro ao buscar', '');
            
            //echo 'testando1';
        }
        elseif ($resultado == 2)
        {
            preencherSessao($resultado, 'CPF Nao encontrado', '');
            
            //echo 'testando3';
        }
        elseif ($resultado == 3)
        {
            preencherSessao($resultado, 'Email nao encontrado', '');
            
            //echo 'testando3';
        }
        
    
    
    
    
    
    //Apos realizar a operacao passada, verifica se deve ser redirecionado para outra pagina ou apenas retornar o resultado para outra funcao
    
        isset($dados['destino'])? redirecionar($dados['destino']) : '';
    /*if(isset($dados['destino']))
    {
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/'.$dados['destino'], true, 303);
        die();
    }*/
    
   
    
    return $resultado;
}

function atualizarAluno($dados)
{
    $aluno = preencherAluno($dados);
    
    
    echo '<br>';
    print_r($aluno);
    $DAOAluno = new DAOAluno();
    
    if($aluno->getEmail() != null)
    {
        echo'<br>Esta inserido<br>';
    }
    else
    {
        echo'<br>NAO Esta inserido<br>';
    }
    
    
    $resultado = $DAOAluno->editar($aluno);
    
    
    if ($resultado == 0)
    {
        preencherSessao($resultado, 'Erro ao atualizar. Operacao nao realizada.', '');
        //$_SESSION["resultado"] = $resultado;
        //$_SESSION["mensagem"] = 'Erro ao atualizar. Operacao nao realizada';
    }
    elseif($resultado == 1)
    {
        preencherSessao($resultado, 'Sucesso ao atualizar.', '');
        //$_SESSION["resultado"] = $resultado;
        //$_SESSION["mensagem"] = 'Sucesso ao atualizar.';
    }
    elseif($resultado == 2)
    {
        preencherSessao($resultado, 'Sucesso ao atualizar, porem nenhuma informacao foi alterada. Dados iguais ou aluno nao encontrado.', '');
        //$_SESSION["resultado"] = $resultado;
        //$_SESSION["mensagem"] = 'Sucesso ao atualizar, porem nenhuma informacao foi alterada. Dados iguais ou aluno nao encontrado.';
    }
        
    
    
    /*
    if(isset($dados['destino']))
    {
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/'.$dados['destino'], true, 303);
        die();
    }
    */
    isset($dados['destino'])? redirecionar($dados['destino']) : '';
    
    return $resultado;
    
}
        

function deletarAluno($dados)
{
    echo '<br>deletar dados inicio<br>';
    print_r($dados);
    echo '<br>deletar dados <br>';
    $aluno = preencherAluno($dados);
    
    
    echo '<br>';
    print_r($aluno);
    $DAOAluno = new DAOAluno();
    
    $resultado = $DAOAluno->deletar($aluno);
    
    echo '<br> resultado <br>';
    print_r($resultado);
    
    if ($resultado == 0)
    {
        preencherSessao($resultado, 'Erro ao deletar. Operacao nao realizada.', '');
      //  $_SESSION["resultado"] = $resultado;
      //  $_SESSION["mensagem"] = 'Erro ao deletar. Operacao nao realizada';
      //  $_SESSION["informacao"] = '';
    }
    elseif($resultado == 1)
    {
        preencherSessao($resultado, 'Sucesso ao remover aluno.', '');
       // $_SESSION["resultado"] = $resultado;
      //  $_SESSION["mensagem"] = 'Sucesso ao remover aluno.';
      //  $_SESSION["informacao"] = '';
    }
    elseif($resultado == 2 || $resultado == 3)
    {
        preencherSessao($resultado, 'Sucesso ao atualizar, porem nenhuma informacao foi alterada. Dados iguais ou aluno nao encontrado.', '');
      //  $_SESSION["resultado"] = $resultado;
      //  $_SESSION["mensagem"] = 'Sucesso ao atualizar, porem nenhuma informacao foi alterada. Dados iguais ou aluno nao encontrado.';
      //  $_SESSION["informacao"] = '';
    }
    
    
    /*
    if(isset($dados['destino']))
    {
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/'.$dados['destino'], true, 303);
        die();
    }
    */
    isset($dados['destino'])? redirecionar($dados['destino']) : '';
    
    return $resultado;
    
}
        
function buscarTotal($dados)
{
    $DAOAluno = new DAOAluno();
    $resultado = $DAOAluno->totalAlunos();
    
    return $resultado;
}

function buscarPaginado($dados)
{
    $DAOAluno = new DAOAluno();
    $paginas = array_values($dados);
   
    print_r($paginas);
    $resultado = $DAOAluno->buscarPaginado([$paginas[0], $paginas[1]]);
    
    
    
    
    
    /*
    if (array_unique(array_map("is_int", array_keys($dados))) === array(true))
    {
        $paginaQuantidade = $dados[0];
        $paginaAtual = $dados[1];
        $aluno->setRg($dados[1]);
        $aluno->setNome($dados[2]);
        $aluno->setNomeDaMae($dados[3]);
        $aluno->setGenero($dados[4]);
        $aluno->setInstEnsino($dados[5]);
        $aluno->setEmail($dados[6]);
        $aluno->setSenha($dados[7]);
        
        $aluno->setTelefone($dados[8]);
        $aluno->setEnderecoRua($dados[9]);
        $aluno->setEnderecoNumero($dados[10]);
        $aluno->setEnderecoComplemento($dados[11]);
        $aluno->setCEP($dados[12]);
        $aluno->setGestor($dados[13]);
        $aluno->setToken($dados[14]);
    }
    else
    {
        $aluno->setCpf(isset($dados['CPF']) ? $dados['CPF'] : '');
        $aluno->setRg(isset($dados['RG']) ? $dados['RG'] : '');
        $aluno->setNome(isset($dados['Nome'])? $dados['Nome'] : '');
    }
    */
    
    //$dados = array_map('', $dados);
    //print_r($dados);
    
    //print_r($dados);
    
    //$resultado = $DAOAluno->deletar($aluno);
}
    //echo "$first_name"."$last_name"."$gender".""; 
//}

?>