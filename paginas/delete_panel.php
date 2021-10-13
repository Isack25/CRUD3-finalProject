<!--Creado por - ISAAC TOVAR-->
<?php
$mysql = new mysqli("localhost", "root", "", "calas");
if ($mysql->connect_error)
    die("Problems with the conection");

$mysql->query("delete from productos where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

$mysql->close();

header('Location:list_panel.php')
?>