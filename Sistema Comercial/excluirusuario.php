<?php

	$cod = $_GET['codigo'];

	include('menu2.php');
	include_once('conexao6.php');
		
	try 
	{
		   
		$delete = $con->prepare("DELETE FROM tb_usu WHERE cd_usuario=$cod");
		$delete->execute();
		echo "<h1>Usuário excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
