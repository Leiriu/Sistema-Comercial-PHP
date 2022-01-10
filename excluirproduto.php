<?php

	$cod = $_GET['codigo'];

	include('menu2.php');
	include_once('conexao5.php');
		
	try 
	{
		   
		$delete = $con->prepare("DELETE FROM tb_produto WHERE cd_produto=$cod");
		$delete->execute();
		echo "<h1>Produto excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
