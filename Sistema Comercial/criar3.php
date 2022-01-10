<?php

include_once "menu2.php";

?>


<?php
	
	include_once "conexao3.php";

$nomefuncio = $_POST["nomefuncio"];

$emailfuncio = $_POST["emailfuncio"];

$numfuncio = $_POST["numfuncio"];

$cepfuncio = $_POST["cepfuncio"];


$stmt = $con->prepare("INSERT INTO tb_funcio(nm_funcio, ds_email_funcio, ds_numero_funcio, ds_cep_funcio)VALUES(?,?,?,?)");

$stmt->bindParam(1,$nomefuncio);

$stmt->bindParam(2,$emailfuncio);

$stmt->bindParam(3,$numfuncio);

$stmt->bindParam(4,$cepfuncio);

$stmt->execute();
	
?>