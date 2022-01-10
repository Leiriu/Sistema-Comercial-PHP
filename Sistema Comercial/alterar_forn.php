<?php
		 include'menu2.php';

		$codigo = $_GET['codigo'];
		
		include_once('conexao4.php');
		 
			$select = $con->prepare("SELECT * FROM tb_forn where cd_forn = $codigo");
			$select->execute();
		
			$row = $select->fetch();
			
		?>

<!DOCTYPE html>
<html>
	<head>
			<title>Alteração de Cadastro</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="estilo.css">
	
	</head>
	
		<body>
	
				<div id="corpo1">
					<div id="corpo2">
					
						<form action="alterarforn.php" method="post">
						
								<h1>Atualização do Fornecedor</h1>
								
							<h4>Código do Fornecedor:</h4>
							<input type="text" name="cd_forn" id="nome" value="<?php echo $row['cd_forn'];?>" readonly="true">
							
							
							<h4>Nome:</h4>
							<input type="text" name="nomeforn" id="nome" value="<?php echo $row['nm_forn'];?>" required>
						
								
							<h4>Email ou Gmail:</h4>
							<input type="text" name="emailforn" id="emailjava" value="<?php echo $row['ds_email_forn'];?>" required>
							
								
							<h4>Número de Telefone:</h4>
							<input type="text" name="numforn" id="numjava" value="<?php echo $row['ds_numero_forn'];?>" required>
										
							<h4>CEP:</h4>
							<input type="text" name="cepforn" id="cepjava" value="<?php echo $row['ds_cep_forn'];?>" required>
							
							<br>
							<br>
							
							<button class="button2 button1" 
							onclick="javascript: location.href='alterarforn.php?codigo=<?php echo $row['cd_forn'];?>'" />
							Atualizar
					
							
							<button class="button2 button1" 
							onclick="javascript: location.href='consultaforn.php'" />
							Voltar
						
						</form>
				
					</div>
				</div>
					
		</body>
</html>