<?php 
session_start();

if(isset($_SESSION['resultado']) && !isset($_SESSION['usuario']))
{
    echo '<script type="text/javascript"> alert("';
    if($_SESSION['resultado'] == 0)
    {
        echo 'Falha ao logar. Login/senha invalidos.';
    }
    else
        echo 'Falha ao cadastrar. Por favor tente novamente.';
    echo '"); </script>';
    session_unset(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
 <!-- <script defer src="./script.js"></script> --> 
  <title>Login</title>
</head>
<body>
  <main class="login">
    <div class="login__container">
      <h1 class="login__title">Bem Vindo</h1>
      <form action="../../Controller/LoginController" method="POST" class="login__form">
        <input class="login__input" type="email" name="Email" placeholder="E-mail" />
        <span class="login__input-border"></span>
        <input class="login__input" type="password" name="Senha" placeholder="Senha"/>
        <span class="login__input-border"></span>
        <input type="hidden" id="destino" name="destino" value="Visual/TelaDePerfil/menu">
        <button class="login__submit" name='Opcao' value='LoginAluno'>Login</button>
        <a class="login__reset" href="#" hidden>Não possui conta?</a>
      </form>
    </div>
  </main>
</body>
</html>