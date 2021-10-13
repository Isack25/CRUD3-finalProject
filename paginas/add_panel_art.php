<?php
$mysql = new mysqli("localhost", "root", "", "calas");
if ($mysql->connect_error)
    die("Problemas con la conexion");

$mysql->query("insert into productos(nombre,descripcion,precio)
                    value('$_REQUEST[nombre]','$_REQUEST[descripcion]',$_REQUEST[precio])") or
    die($mysql->error);

$mysql->close();

header('Location:list_panel.php')
?>