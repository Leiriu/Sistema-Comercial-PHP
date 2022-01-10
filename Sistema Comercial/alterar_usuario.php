<?php
		 include'menu2.php';

		$codigo = $_GET['codigo'];
		
		include_once('conexao6.php');
		 
			$select = $con->prepare("SELECT * FROM tb_usu where cd_usuario = $codigo");
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
			
						<form action="alterarusuario.php" method="post">
			
								<h1>Atualização do Usuário</h1>
								
							<h4>Código do Usuário:</h4>
							<input type="text" name="cd_usuario" id="nome" value="<?php echo $row['cd_usuario'];?>" readonly="true">
							
							
							<h4>Nome:</h4>
							<input type="text" name="nomeusu" id="nome" value="<?php echo $row['nm_usuario'];?>" required>
						
								
							<h4>Email ou Gmail:</h4>
							<input type="text" name="emailusu" id="emailjava" value="<?php echo $row['ds_email_usuario'];?>" required>
							
								
							<h4>Número de Telefone:</h4>
							<input type="text" name="numusu" id="numjava" value="<?php echo $row['ds_numero_usuario'];?>" required>
										
							<h4>CEP:</h4>
							<input type="text" name="cepusu" id="cepjava" value="<?php echo $row['ds_cep_usuario'];?>" required>
							
							<br>
							<br>
							
							<button class="button2 button1" 
							onclick="javascript: location.href='alterarusuario.php?codigo=<?php echo $row['cd_usuario'];?>'" />
							Atualizar
					
							
							<button class="button2 button1" 
							onclick="javascript: location.href='consultausu.php'" />
							Voltar
										
						</form>
					
					</div>
				</div>
					
		</body>
</html>