<?php

$cod = $_POST['cd_cliente']; 
$nome = $_POST['nomecliente'];
$email = $_POST['emailcliente'];
$numero = $_POST['numcliente'];
$cep = $_POST['cepcliente'];

 include'menu2.php';
 
include_once('conexao2.php');
	try 
	{
		   
		$stmt = $conexao2->prepare('UPDATE tb_cliente SET 
													nm_cliente = :nome,
													ds_email = :email,
													ds_numero = :numero,
													ds_cep = :cep	
									          WHERE cd_cliente = :codigo');
		
		$stmt->execute(array(':codigo' => $cod, 
							 ':nome' => $nome,
							 ':email' => $email,
							 ':numero' => $numero,
							 ':cep' => $cep
							 ));

		?>
		<br>
		<button class="btn btn-primary btn-sm"
				onclick="javascript: location.href='consultacliente.php'">Voltar</button>
				
				<table width=700 align=center>
		<th width=300>CLIENTE ALTERADO COM SUCESSO</th>
				
		<?php
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
