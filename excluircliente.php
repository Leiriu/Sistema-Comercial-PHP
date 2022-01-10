<?php

	$cod = $_GET['codigo'];

	include('menu2.php');
	include_once('conexao2.php');
		
	try 
	{
		   
		$delete = $conexao2->prepare("DELETE FROM tb_cliente WHERE cd_cliente=$cod");
		$delete->execute();
		echo "<h1>Cliente excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
