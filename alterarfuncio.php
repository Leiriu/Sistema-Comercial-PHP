<?php

$cod = $_POST['cd_funcio']; 
$nome = $_POST['nomefuncio'];
$email = $_POST['emailfuncio'];
$numero = $_POST['numfuncio'];
$cep = $_POST['cepfuncio'];

 include'menu2.php';
 
include_once('conexao3.php');
	try 
	{
		   
		$stmt = $con->prepare('UPDATE tb_funcio SET 
													nm_funcio = :nome,
													ds_email_funcio = :email,
													ds_numero_funcio = :numero,
													ds_cep_funcio = :cep	
									          WHERE cd_funcio = :codigo');
		
		$stmt->execute(array(':codigo' => $cod, 
							 ':nome' => $nome,
							 ':email' => $email,
							 ':numero' => $numero,
							 ':cep' => $cep
							 ));

		?>
		<br>
		<button class="btn btn-primary btn-sm"
				onclick="javascript: location.href='consultafuncio.php'">Voltar</button>
				
				<table width=700 align=center>
		<th width=300>FUNCIONÁRIO ALTERADO COM SUCESSO</th>
				
		<?php
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
