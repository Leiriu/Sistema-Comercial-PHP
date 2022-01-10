<?php
	
	include_once "conexao.php";

$usuario = $_POST["usuario"];

$senha = $_POST["psw"];


$stmt = $con->prepare("INSERT INTO tb_cadastro(nm_usuario, ds_senha)VALUES(?, MD5(?))");

$stmt->bindParam(1,$usuario);

$stmt->bindParam(2,$senha);

$stmt->execute();

		echo"<script>
        
                alert('Conta criada com sucesso!');
                window.location.href = 'sair.php';
            
            </script>";
	
?>


