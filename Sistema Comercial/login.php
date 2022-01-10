<?php
	
	session_start();

    $usuario = $_POST['usuario'];
    $senha = MD5($_POST['psw']);
	

    include_once('conexao.php');
    
    $rs = $con->query("SELECT * FROM tb_cadastro where nm_usuario='$usuario'and ds_senha='$senha'");
            
    $rs -> execute();
    
   if($rs->fetch(PDO::FETCH_ASSOC) == true)
    {
		$_SESSION['usuario'] = $usuario;
        header('Location:menu2.php');
    }
    else
    {
        echo"<script>
        
                alert('Nome de usuário ou senha incorreto');
                window.location.href = 'sair.php';
            
            </script>";
        
    }

 

?>