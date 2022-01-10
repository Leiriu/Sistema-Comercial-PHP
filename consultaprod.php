<?php  
		include('menu2.php');
		include_once("conexao5.php");
		try 
		{
		   
			$select = $con->prepare('SELECT * FROM tb_produto');
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

<table id="customers">
  <tr>
    <th>Código</th>
    <th>Nome do Produto</th>
    <th>Marca do Produto</th>
  </tr>


			
			<?php
				
			while($row = $select->fetch()) 
				{
				?>
				
			<tr>
				<td><?php echo $row['cd_produto'];?></td>
				<td><?php echo $row['nm_produto'];?></td>
				<td><?php echo $row['nm_marca_produto'];?></td>
				
				<td>
				<button class="button button1" 
				onclick="javascript: location.href='excluir_produto.php?codigo=<?php echo $row['cd_produto'];?>'" />
				Excluir
				</td>
				
				
				<td>
				<button class="button2 button1" 
				onclick="javascript: location.href='alterar_produto.php?codigo=<?php echo $row['cd_produto'];?>'" />
				Alterar
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
