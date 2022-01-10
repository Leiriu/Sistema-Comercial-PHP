<?php
		 include'menu2.php';

		$codigo = $_GET['codigo'];
		
		include_once('conexao5.php');
		 
			$select = $con->prepare("SELECT * FROM tb_produto where cd_produto = $codigo");
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
					
						<form action="alterarproduto.php" method="post">
						
								<h1>Atualização do Produto</h1>
								
							<h4>Código do Produto:</h4>
							<input type="text" name="cd_produto" id="nome" value="<?php echo $row['cd_produto'];?>" readonly="true">
							
							
							<h4>Nome do Produto:</h4>
							<input type="text" name="nomeprod" id="nome" value="<?php echo $row['nm_produto'];?>" required>
						
								
							<h4>Marca do Produto:</h4>
							<input type="text" name="marcaprod" id="emailjava" value="<?php echo $row['nm_marca_produto'];?>" required>
							
							
							<br>
							<br>
							
							<button class="button2 button1" 
							onclick="javascript: location.href='confirma_produto.php?codigo=<?php echo $row['cd_produto'];?>'" />
							Atualizar
					
							
							<button class="button2 button1" 
							onclick="javascript: location.href='alterarproduto.php'" />
							Voltar
											
						</form>
				
					</div>
				</div>
					
		</body>
</html>