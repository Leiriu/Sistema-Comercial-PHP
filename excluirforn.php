<?php

	$cod = $_GET['codigo'];

	include('menu2.php');
	include_once('conexao4.php');
		
	try 
	{
		   
		$delete = $con->prepare("DELETE FROM tb_forn WHERE cd_forn=$cod");
		$delete->execute();
		echo "<h1>Fornecedor excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
