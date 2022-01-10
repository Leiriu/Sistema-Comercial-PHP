<?php  
		include('menu2.php');
		include_once("conexao6.php");
		$codigo = $_GET['codigo'];
		try 
		{
		   
			$select = $con->prepare("SELECT * FROM tb_usu where cd_usuario = '$codigo'");
			$select->execute();
				
?>
		
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.button {
  background-color: #f55353; /* Red */
  border: none;
  color: white;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 2px 2px;
  cursor: pointer;
}

.button2 {
  background-color: #5b8ef5; /* Blue */
  border: none;
  color: white;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 2px 2px;
  cursor: pointer;
}
.button1 {font-size: 10px;}

</style>
</head>
<body>

<h1>Quer mesmo excluir esse usuário?</h1>
<table id="customers">
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Número</th>
    <th>CEP</th>
  </tr>


			
			<?php
				
			while($row = $select->fetch()) 
				{
				?>
				
			<tr>
				<td><?php echo $row['cd_usuario'];?></td>
				<td><?php echo $row['nm_usuario'];?></td>
				<td><?php echo $row['ds_email_usuario'];?></td>
				<td><?php echo $row['ds_numero_usuario'];?></td>
				<td><?php echo $row['ds_cep_usuario'];?></td>
				<td>
				
				<button class="button button1" 
				onclick="javascript: location.href='excluirusuario.php?codigo=<?php echo $row['cd_usuario'];?>'" />
				Confirmar exclusão
				</td>
				
				
				<td>
				<button class="button2 button1" 
				onclick="javascript: location.href='consultausu.php?codigo=<?php echo $row['cd_usuario'];?>'" />
				Voltar
				</td>
				
			</tr>
	
				<?php

				}
			} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
		?>
			

		  </table>
	</body>
</html>
