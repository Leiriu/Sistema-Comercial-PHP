<?php

include_once "menu2.php";

?>


<?php
	
	include_once "conexao4.php";

$nomeforn = $_POST["nomeforn"];

$emailforn = $_POST["emailforn"];

$numforn = $_POST["numforn"];

$cepforn = $_POST["cepforn"];


$stmt = $con->prepare("INSERT INTO tb_forn(nm_forn, ds_email_forn, ds_numero_forn, ds_cep_forn)VALUES(?,?,?,?)");

$stmt->bindParam(1,$nomeforn);

$stmt->bindParam(2,$emailforn);

$stmt->bindParam(3,$numforn);

$stmt->bindParam(4,$cepforn);

$stmt->execute();
	
?>