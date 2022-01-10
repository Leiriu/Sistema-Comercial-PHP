<?php
session_start();//inicia a sessão
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	
	<body>
	
	<form action="login.php" method="post">
	<div id="corpo1">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Usuário</b></label>
    <input type="text" placeholder="Digite seu Usuário" name="usuario" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Digite sua senha aqui" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="lembrar"> Lembrar-me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
    <a href="cadastro.php" button type="button" class="cancelbtn">Criar conta</button></a>
    <span class="psw">Esqueci a <a href="#">senha</a></span>
  </div>
  </div>
</form>
	
	
	<?php 
	session_unset(); //remove todas as variáveis de sessão
	session_destroy(); // destrói a sessão
	
	
	
	?>
	
	
	
	</body>
	
	
</html>	
