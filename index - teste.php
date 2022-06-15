<?php


 ?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
  
<body>

        <h1>Logar usuario Database</h1>
        
        
        <form action="./Controller/LoginController.php" method="post">   
        
<p>  
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
</p>
<p>
                <label for="Senha">Senha:</label>
                <input type="text" name="Senha" id="Senha">
</p>
				<input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="LoginAluno">
        </form>


<h1>Logar gestor Database</h1>

        <form action="./Controller/LoginController.php" method="post">    
<p>
                <label for="CPF">CPF:</label>
                <input type="text" name="CPF" id="CPF">
</p>
<p>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
</p>
<p>
                <label for="Senha">Senha:</label>
                <input type="text" name="Senha" id="Senha">
</p>
                <input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="LoginGestor">

        </form>




        <h1>Inserir Database</h1>
  
        <form action="./Controller/AlunoController.php" method="post">     
<p>
                <label for="CPF">CPF:</label>
                <input type="text" name="CPF" id="CPF">
 </p>
<p>
                <label for="RG">RG:</label>
                <input type="text" name="RG" id="RG">
</p>
<p>
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome">
</p>
<p>
                <label for="Nome da Mae">Nome da Mae:</label>
                <input type="text" name="NomeDaMae" id="Nome da Mae">
</p>
<p>
                <label for="Genero">Genero:</label>
                <input type="text" name="Genero" id="Genero">
</p>
<p>
                <label for="Instituicao ensino">Instituicao de Ensino:</label>
                <input type="text" name="InstEnsino" id="Instituicao ensino">
</p>
<p>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
</p>
<p>
                <label for="Senha">Senha:</label>
                <input type="text" name="Senha" id="Senha">
</p>
<p>
                <label for="Telefone de contato">Telefone de contato:</label>
                <input type="text" name="Telefone" id="Telefone de contato">
</p>

<p>
                <label for="Rua">Rua:</label>
                <input type="text" name="Rua" id="Rua">
</p>
<p>
                <label for="Numero">numero:</label>
                <input type="text" name="Numero" id="Numero">
</p>
<p>
                <label for="Complemento">Complemento:</label>
                <input type="text" name="Complemento" id="complemento">
</p>
<p>
                <label for="CEP">CEP:</label>
                <input type="text" name="CEP" id="Telefone de contato">
</p>
<p>
                <label for="Token">Token:</label>
                <input type="text" name="Token" id="Token">
</p>


				<input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="Cadastrar">
        </form>
        
        
        
        
        
        
        
        <h1>buscar Database</h1>
        
        
        
		<form action="./Controller/AlunoController.php" method="post" >
<p>
                <label for="CPF">CPF:</label>
                <input type="text" name="CPF" id="CPF">
 </p>
 <p>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
 </p>
 
 				<input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="Buscar">
        </form>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
        <h1>Atualizar Database</h1>

<form action="./Controller/AlunoController.php" method="post">     
<p>
                <label for="CPF">CPF:</label>
                <input type="text" name="CPF" id="CPF">
 </p>
<p>
                <label for="RG">RG:</label>
                <input type="text" name="RG" id="RG">
</p>
<p>
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome">
</p>
<p>
                <label for="Nome da Mae">Nome da Mae:</label>
                <input type="text" name="NomeDaMae" id="Nome da Mae">
</p>
<p>
                <label for="Genero">Genero:</label>
                <input type="text" name="Genero" id="Genero">
</p>
<p>
                <label for="Instituicao ensino">Instituicao de Ensino:</label>
                <input type="text" name="InstEnsino" id="Instituicao ensino">
</p>
<p>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
</p>
<p>
                <label for="Senha">Senha:</label>
                <input type="text" name="Senha" id="Senha">
</p>
<p>
                <label for="Telefone de contato">Telefone de contato:</label>
                <input type="text" name="Telefone" id="Telefone de contato">
</p>

<p>
                <label for="Rua">Rua:</label>
                <input type="text" name="Rua" id="Rua">
</p>
<p>
                <label for="Numero">numero:</label>
                <input type="text" name="Numero" id="Numero">
</p>
<p>
                <label for="Complemento">Complemento:</label>
                <input type="text" name="Complemento" id="complemento">
</p>
<p>
                <label for="CEP">CEP:</label>
                <input type="text" name="CEP" id="Telefone de contato">
</p>
<p>
                <label for="Token">Token:</label>
                <input type="text" name="Token" id="Token">
</p>

  				<input type="hidden" id="destino" name="destino" value="resultado.php">
  				
  				
            <input type="submit" name="Opcao" value="Atualizar">
        </form>
        
        

        <h1>Deletar Database</h1>
        
        
        
		<form action="./Controller/AlunoController.php" method="post" >
<p>
                <label for="CPF">CPF:</label>
                <input type="text" name="CPF" id="CPF">
 </p>
 <p>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
 </p>
 
 				<input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="Deletar">
        </form>
        
        
                <h1>Deletar Database</h1>
        
        
        
		<form action="./Controller/AlunoController.php" method="post" >
		<label for="quantPagina">Quantidade por pagina:</label>
			<select name="quantidade Paginas" id="quantidadePorPagina">
      				<option value="1">1</option>
      				<option value="2">2</option>
      				<option value="3">3</option>
      				<option value="4">4</option>
      		</select>
      	<label for="atualPagina">Pagina atual:</label>
    		<select name="Pagina atual" id="atualPagina">Pagina Atual
      				<option value="1">1</option>
      				<option value="2">2</option>
      				<option value="3">3</option>
      				<option value="4">4</option>
 			</select>
 				<input type="hidden" id="destino" name="destino" value="resultado.php">
  
            <input type="submit" name="Opcao" value="BuscarPaginado">
        </form>
        
        
        
        
    </center>
</body>
  
</html>