<?php

include_once "menu2.php";

?>


<?php
	
	include_once "conexao5.php";

$nomeprod = $_POST["nomeprod"];

$marcaprod = $_POST["marcaprod"];


$stmt = $con->prepare("INSERT INTO tb_produto (nm_produto, nm_marca_produto)VALUES(?,?)");

$stmt->bindParam(1,$nomeprod);

$stmt->bindParam(2,$marcaprod);



$stmt->execute();
	
?>