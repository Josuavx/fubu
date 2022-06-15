<?php

session_start();

foreach($_POST as $key=>$value)
{
    $_SESSION[$key] = $value;
}
print_r($_SESSION);
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    
    <div class="container">
        <div class="form">
            <form action="../../Controller/AlunoController" method="POST" class="forms">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>

                    <div class="login-b">
                        <input type="submit" id="btn-submit" name="Opcao" value="Cadastrar" >
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="Email">Email</label>
                        <input id="email" type="email" name="Email" placeholder="Ex:email@email.com" required>
                    </div>

                    <div class="input-box">
                        <label for="Senha">Senha</label>
                        <input id="senha" type="password" name="Senha" placeholder="No minino 8 digitos" required>
                    </div>

                    <div class="input-box">
                        <label for="Confima_senha">Confimar Senha</label>
                        <input id="conf_senha" type="password" name="" placeholder="Confimar senha" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Token">Token</label>
                        <input id="Token" type="text" name="Token" placeholder="Token" required>
                    </div>

					<input type="hidden" id="destino" name="destino" value="index">
					
					
                </div>
                    <div class="gender-inputs">
                        <div class="Foto_comprovante">
                            <h6 hidden>Foto do Comprovante!</h6>

                        </div>
                            <h3>Bem Vindo ao FUBU!</h3>
                        </div>
                    </div>
                </div>
                

                <div class="form-image">
                    <img src="assests/img/undraw_my_password_re_ydq7.svg" alt="">
                </div>
                
            </form>
        </div>
    </div>
     <p class="error-validation template"></p>
    <script src="./js/scripts.js"></script>
</body>
</html>