<?php
		 include'menu2.php';

		$codigo = $_GET['codigo'];
		
		include_once('conexao2.php');
		 
			$select = $conexao2->prepare("SELECT * FROM tb_cliente where cd_cliente= $codigo");
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
					
			
						<form action="alterarcliente.php" method="post">
						
								<h1>Atualização do Cliente</h1>
								
							<h4>Código do Cliente:</h4>
							<input type="text" name="cd_cliente" id="nome" value="<?php echo $row['cd_cliente'];?>" readonly="true">
							
							
							<h4>Nome:</h4>
							<input type="text" name="nomecliente" id="nome" value="<?php echo $row['nm_cliente'];?>" required>
						
								
							<h4>Email ou Gmail:</h4>
							<input type="text" name="emailcliente" id="emailjava" value="<?php echo $row['ds_email'];?>" required>
							
								
							<h4>Número de Telefone:</h4>
							<input type="text" name="numcliente" id="numjava" value="<?php echo $row['ds_numero'];?>" required>
										
							<h4>CEP:</h4>
							<input type="text" name="cepcliente" id="cepjava" value="<?php echo $row['ds_cep'];?>" required>
							
							<br>
							<br>
							
							<button class="button2 button1" 
							onclick="javascript: location.href='alterarcliente.php?codigo=<?php echo $row['cd_cliente'];?>'" />
							Atualizar
					
							
							<button class="button2 button1" 
							onclick="javascript: location.href='consultacliente.php'" />
							Voltar
							
						</form>				
				
					</div>
				</div>
					
		</body>
</html>