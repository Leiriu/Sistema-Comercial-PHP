<?php

include_once "menu2.php";

?>


<?php
	
	include_once "conexao6.php";

$nomeusu = $_POST["nomeusu"];

$emailusu = $_POST["emailusu"];

$numusu = $_POST["numusu"];

$cepusu = $_POST["cepusu"];


$stmt = $con->prepare("INSERT INTO tb_usu(nm_usuario, ds_email_usuario, ds_numero_usuario, ds_cep_usuario)VALUES(?,?,?,?)");

$stmt->bindParam(1,$nomeusu);

$stmt->bindParam(2,$emailusu);

$stmt->bindParam(3,$numusu);

$stmt->bindParam(4,$cepusu);

$stmt->execute();
	
?>