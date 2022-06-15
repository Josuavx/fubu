<?php
include_once "AlunoController.php";
include_once "../Model/BD/DAOAluno.php";
include_once "../Model/Objetos/Aluno.php";

include_once "GestorController.php";
include_once "../Model/BD/DAOGestor.php";
include_once "../Model/Objetos/Gestor.php";

//session_start();



if (isset($_POST['Opcao'])) {
    switch ($_POST['Opcao']) {
        case 'LoginAluno':
            LoginAluno($_POST);
            break;
        case 'LoginGestor':
            loginGestor($_POST);
            break;
    }
}




/*
function preencherSessao($resultado, $mensagem, $informacao)
{
    $_SESSION["resultado"] = $resultado;
    $_SESSION["mensagem"] = $mensagem;
    $_SESSION["informacao"] = $informacao;
}

*/




function LoginAluno($dados){
    //print_r($_SESSION);
    
    //echo 'numero 1';
    
    $resultado = buscarAluno(array('Email' => $dados['Email']));
    
   // echo '<br>sessao atualizada <br>';
    //print_r($_SESSION);
  //  echo '<br>resultado <br>';
    //print_r($resultado);
    
    
    if (is_object($resultado))
    {
        if($dados['Senha'] == $resultado->getSenha())
        {
            $_SESSION['usuario'] = $resultado->getVariaveis();
            //$_SESSION['usuario'] = serialize($resultado);
            $_SESSION["hora_login"] = time();
            preencherSessao(1, 'Login completo', '');
            // $_SESSION["resultado"] = 1;
            // $_SESSION["mensagem"] = 'Login completo';
            // $_SESSION["informacao"] = dirname(__FILE__) ;
            
          //  echo 'Senhas iguais';
        }
    }
    else
    {
        $_SESSION['usuario'] = NULL;
        preencherSessao(0, 'Usuario ou senha errados', '');
        //$_SESSION["resultado"] = 0;
        //$_SESSION["mensagem"] = 'Usuario ou senha errados';
        //$_SESSION["informacao"] = (array)$resultado;
       // echo 'Senhas diferentes';
    }
    
    /*
    if(isset($dados['destino']))
    {
       // echo 'redirecionar';
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/'.$dados['destino'], true, 303);
        die();
    }*/
    
    isset($dados['destino'])? redirecionar($dados['destino']) : '';
    
    
    //header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/resultado.php', true, 303);
    
}


function loginGestor($dados){
    // print_r($_SESSION);
    
    //echo 'numero 1';
    
    
    $resultado = buscarGestor(array('Email' => $dados['Email']));
    
    echo '<br>sessao atualizada <br>';
    //print_r($_SESSION);
    echo '<br>resultado <br>';
    //print_r($resultado);
   
    if (is_object($resultado))
    {
        if($dados['Senha'] == $resultado->getSenha())
        {
            $_SESSION['usuario'] = $resultado->getVariaveis();
            preencherSessao(1, 'Login completo', '');
            $_SESSION["hora_login"] = time();
       // $_SESSION["resultado"] = 1;
       // $_SESSION["mensagem"] = 'Login completo';
       // $_SESSION["informacao"] = (array)$resultado;
        
            echo 'Senhas iguais';
        }
    }
    else
    {
        $_SESSION['usuario'] = NULL;
        preencherSessao(0, 'Usuario ou senha errados', '');
        //$_SESSION["resultado"] = 0;
        //$_SESSION["mensagem"] = 'Usuario ou senha errados';
        //$_SESSION["informacao"] = (array)$resultado;
        echo 'Senhas diferentes';
    }
    
    /*
    if(isset($dados['destino']))
    {
       // echo 'redirecionar';
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/'.$dados['destino'], true, 303); #Pra utilizar no seu use /workspace antes de /FUBU/
        die();
    }*/
    
    isset($dados['destino'])? redirecionar($dados['destino']) : '';
    
    //header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/resultado.php', true, 303);
    
}







?>