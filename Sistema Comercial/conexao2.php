<?php
try
{
    $conexao2 = new PDO("mysql:host=localhost:3306;dbname=tb_cliente",
                   "root", "usbw");
    $conexao2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo 'Login ou senha errada, tente novamente ou crie uma conta! ' . $e->getMessage();
}
?>