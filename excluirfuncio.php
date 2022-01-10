<?php

	$cod = $_GET['codigo'];

	include('menu2.php');
	include_once('conexao3.php');
		
	try 
	{
		   
		$delete = $con->prepare("DELETE FROM tb_funcio WHERE cd_funcio=$cod");
		$delete->execute();
		echo "<h1>Funcionário excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
