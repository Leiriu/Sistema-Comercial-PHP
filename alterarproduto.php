<?php

$cod = $_POST['cd_produto']; 
$produto = $_POST['nomeprod'];
$marca = $_POST['marcaprod'];


 include'menu2.php';
 
include_once('conexao5.php');
	try 
	{
		   
		$stmt = $con->prepare('UPDATE tb_produto SET 
													nm_produto = :produto,				
													nm_marca_produto = :marca	
									          WHERE cd_produto = :codigo');
		
		$stmt->execute(array(':codigo' => $cod, 
							 ':produto' => $produto,
							 ':marca' => $marca
							 ));

		?>
		<br>
		<button class="btn btn-primary btn-sm"
				onclick="javascript: location.href='consultaprod.php'">Voltar</button>
				
				<table width=700 align=center>
		<th width=300>PRODUTO ALTERADO COM SUCESSO</th>
				
		<?php
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
