<?php
		 include'menu2.php';

		$codigo = $_GET['codigo'];
		
		include_once('conexao3.php');
		 
			$select = $con->prepare("SELECT * FROM tb_funcio where cd_funcio = $codigo");
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
					
				
						<form action="alterarfuncio.php" method="post">
			
								<h1>Atualização do Funcionário</h1>
								
							<h4>Código do Funcionário:</h4>
							<input type="text" name="cd_funcio" id="nome" value="<?php echo $row['cd_funcio'];?>" readonly="true">
							
							
							<h4>Nome:</h4>
							<input type="text" name="nomefuncio" id="nome" value="<?php echo $row['nm_funcio'];?>" required>
						
								
							<h4>Email ou Gmail:</h4>
							<input type="text" name="emailfuncio" id="emailjava" value="<?php echo $row['ds_email_funcio'];?>" required>
							
								
							<h4>Número de Telefone:</h4>
							<input type="text" name="numfuncio" id="numjava" value="<?php echo $row['ds_numero_funcio'];?>" required>
										
							<h4>CEP:</h4>
							<input type="text" name="cepfuncio" id="cepjava" value="<?php echo $row['ds_cep_funcio'];?>" required>
							
							<br>
							<br>
							
							<button class="button2 button1" 
							onclick="javascript: location.href='alterarfuncio.php?codigo=<?php echo $row['cd_funcio'];?>'" />
							Atualizar
					
							
							<button class="button2 button1" 
							onclick="javascript: location.href='consultafuncio.php'" />
							Voltar
										
						</form>
						
					</div>
				</div>
					
		</body>
</html>