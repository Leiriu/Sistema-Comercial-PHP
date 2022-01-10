<?php

$cod = $_POST['cd_forn']; 
$nome = $_POST['nomeforn'];
$email = $_POST['emailforn'];
$numero = $_POST['numforn'];
$cep = $_POST['cepforn'];

 include'menu2.php';
 
include_once('conexao4.php');
	try 
	{
		   
		$stmt = $con->prepare('UPDATE tb_forn SET 
													nm_forn = :nome,
													ds_email_forn = :email,
													ds_numero_forn = :numero,
													ds_cep_forn = :cep	
									          WHERE cd_forn = :codigo');
		
		$stmt->execute(array(':codigo' => $cod, 
							 ':nome' => $nome,
							 ':email' => $email,
							 ':numero' => $numero,
							 ':cep' => $cep
							 ));

		?>
		<br>
		<button class="btn btn-primary btn-sm"
				onclick="javascript: location.href='consultaforn.php'">Voltar</button>
				
				<table width=700 align=center>
		<th width=300>FORNECEDOR ALTERADO COM SUCESSO</th>
				
		<?php
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
