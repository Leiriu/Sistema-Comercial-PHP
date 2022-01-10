<?php

include_once "menu2.php";

?>


<?php
	
	include_once "conexao2.php";

$nomecliente = $_POST["nomecliente"];

$emailcliente = $_POST["emailcliente"];

$numerocliente = $_POST["numcliente"];

$cepcliente = $_POST["cepcliente"];


$stmt = $conexao2->prepare("INSERT INTO tb_cliente(nm_cliente, ds_email, ds_numero, ds_cep)VALUES(?,?,?,?)");

$stmt->bindParam(1,$nomecliente);

$stmt->bindParam(2,$emailcliente);

$stmt->bindParam(3,$numerocliente);

$stmt->bindParam(4,$cepcliente);

$stmt->execute();
	
?>