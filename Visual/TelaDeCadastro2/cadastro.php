<?php

session_start();

foreach($_POST as $key=>$value)
{
    $_SESSION[$key] = $value;
}
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
            <form action="../TelaDeCadastro3/cadastro" method='POST' class="forms">
                <div class="form-header">
                    <div class="title">
                        <h1>Endereço</h1>
                    </div>

                    <div class="login-b">
                        <input type="submit" id="btn-submit" value="Proximo">
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="Rua">Rua</label>
                        <input id="rua" type="text" name="Rua" placeholder="Ex:Rua Santo Antonio" required data-min-length="3">
                    </div>

                    <div class="input-box">
                        <label for="Numero">Numero</label>
                        <input id="numero" type="number" name="Numero" placeholder="Ex:250" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Numero">Complemento</label>
                        <input id="numero" type="text" name="Complemento" placeholder="Ex: apt 101">
                    </div>

                    <div class="input-box">
                        <label for="CEP">CEP</label>
                        <input id="cep" type="number" name="CEP" placeholder="Ex:50770630(Sem o -)" required>
                    </div>



                </div>
                    <div class="gender-inputs">
                        <div class="Foto_comprovante">
                            <h6>Foto do Comprovante!</h6>

                        </div>
                            <h3>Envie para o link ao lado: <a href=""></a></h3>
                        </div>
                    </div>
                </div>
                

                <div class="form-image">
                    <img src="assests/img/undraw_ordinary_day_re_v5hy.svg" alt="">
                </div>
                
            </form>
        </div>
    </div>
     <p class="error-validation template"></p>
    <script src="./js/scripts.js"></script>
</body>
</html>