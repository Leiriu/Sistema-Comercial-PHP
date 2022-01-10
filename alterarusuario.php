<?php

$cod = $_POST['cd_usuario']; 
$nome = $_POST['nomeusu'];
$email = $_POST['emailusu'];
$numero = $_POST['numusu'];
$cep = $_POST['cepusu'];

 include'menu2.php';
 
include_once('conexao6.php');
	try 
	{
		   
		$stmt = $con->prepare('UPDATE tb_usu SET 
													nm_usuario = :nome,
													ds_email_usuario = :email,
													ds_numero_usuario = :numero,
													ds_cep_usuario = :cep	
									          WHERE cd_usuario = :codigo');
		
		$stmt->execute(array(':codigo' => $cod, 
							 ':nome' => $nome,
							 ':email' => $email,
							 ':numero' => $numero,
							 ':cep' => $cep
							 ));

		?>
		<br>
		<button class="btn btn-primary btn-sm"
				onclick="javascript: location.href='consultausu.php'">Voltar</button>
				
				<table width=700 align=center>
		<th width=300>USUÁRIO ALTERADO COM SUCESSO</th>
				
		<?php
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
