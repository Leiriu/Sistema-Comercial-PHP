<?php	
session_start(); 
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Menu</title>
			<meta charset="UTF-8">
				<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body class="background">
	
	<?php
		if(isset($_SESSION['usuario']))
		{
		if ($_SESSION['usuario'] == "Uiriel")
		{
	?>

	<div class="topnav" id="myTopnav">
 <a href="sair.php">Sair</a>
 
 <a href="menu2.php">Menu</a>
 
 <div class="dropdown">
  <button class="dropbtn">Cadastro 
  <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-content">
      <a href="cliente.html">Cliente</a>
      <a href="fun.html">Funcionário</a>
      <a href="forn.html">Fornecedor</a>
	  <a href="prod.html">Produto</a>
	  <a href="usu.html">Usuários</a>
  </div>
  </div>
  
  
  <div class="dropdown">
    <button class="dropbtn">Consulta 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="consultacliente.php">Cliente</a>
      <a href="consultafuncio.php">Funcionário</a>
	  <a href="consultaforn.php">Fornecedor</a>
	  <a href="consultaprod.php">Produto</a>
	  <a href="consultausu.php">Usuários</a>
    </div>
  </div>
  
  <a href="sobre.php">Sobre Nós</a>
  <a href="contato.php">Contato</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  
	<?php
		}
		else
		{
	?>
	
	<div class="topnav" id="myTopnav">
 <a href="sair.php">Sair</a>
 
 <a href="menu2.php">Menu</a>
 
 <div class="dropdown">
  <button class="dropbtn">Cadastro 
  <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-content">
      <a href="cliente.html">Cliente</a>
      <a href="fun.html">Funcionário</a>
      <a href="forn.html">Fornecedor</a>
	  <a href="prod.html">Produto</a>
	  <a href="usu.html">Usuários</a>
  </div>
  </div>
  
  
  <div class="dropdown">
    <button class="dropbtn">Consulta 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="consultacliente.php">Cliente</a>
      <a href="consultafuncio.php">Funcionário</a>
	  <a href="consultaforn.php">Fornecedor</a>
	  <a href="consultaprod.php">Produto</a>
	  <a href="consultausu.php">Usuários</a>
    </div>
  </div>
	
  
  <a href="sobre.php">Sobre Nós</a>
  <a href="contato.php">Contato</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
	
	<?php
		}
	}
	else
		{
			echo "
			<script>
				window.alert('Não permitido')
				window.location.href='sair.php';
			</script>";
			
		}
?>
</body>
</html>