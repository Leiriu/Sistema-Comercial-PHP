<?php
try
{
    $con = new PDO("mysql:host=localhost:3306;dbname=tb_usu",
                   "root", "usbw");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo 'Login ou senha errada, tente novamente ou crie uma conta! ' . $e->getMessage();
}
?>