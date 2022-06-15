<?php 

session_start();
session_unset();  
session_destroy();

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
            <form action="../TelaDeCadastro2/cadastro" method="POST" class="forms">
                <div class="form-header">
                    <div class="title">
                        <h1>Informações Pessoais</h1>
                    </div>

                    <div class="login-b">
                        <input type="submit" id="btn-submit" value="Proximo" >
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="Nome">Nome</label>
                        <input id="nome" type="text" name="Nome" placeholder="Digite seu nome" required data-min-length="3">
                    </div>

                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="cpf" type="number" name="CPF" placeholder="CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="RG">RG</label>
                        <input id="RG" type="number" name="RG" placeholder="RG" required>
                    </div>

                    <div class="input-box">
                        <label for="N_MAE">Nome da Mãe</label>
                        <input id="n_mae" type="text" name="NomeDaMae" placeholder="Nome da Mãe" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="inst_de_ensino">Instituição de Ensino</label>
                        <input id="inst_de_ensino" type="text" name="InstEnsino" placeholder="Instituição de Ensino" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="tel">Telefone</label>
                        <input id="telefone" type="tel" name="Telefone" placeholder="(xx)xxxxx-xxxx" required>
                    </div>

                </div>
                    <div class="gender-inputs">
                        <div class="generos">
                            <h6>Genêros</h6>
                        </div>
                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" id="female" name="Genero" value="f">
                                <label for="famale">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" id="male" name="Genero" value="m">
                                <label for="male">Masculino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" id="Others" name="Genero" value="o">
                                <label for="Others">Outros/Não Binário</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" id="none" name="Genero" value="z">
                                <label for="none">Prefiro não responder</label>
                            </div>

                        </div>
                    </div>
                </div>
                

                <div class="form-image">
                    <img src="assests/img/undraw_knowledge_re_5v9l (1).svg" alt="">
                </div>
                
            </form>
            
        </div>
    </div>
     <p class="error-validation template"></p>
    <script src="./js/scripts.js"></script>
</body>
</html>