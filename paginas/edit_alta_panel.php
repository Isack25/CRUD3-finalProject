<!--Creado por ISAAC TOVAR-->
<?php
$mysql = new mysqli("localhost", "root", "", "calas");
if ($mysql->connect_error)
    die("Problemas con la conexion");

$mysql->query("update productos set
                            nombre='$_REQUEST[nombre]',
                            descripcion='$_REQUEST[descripcion]',
                            precio=$_REQUEST[precio]
                        where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

$mysql->close();

header('Location:list_panel.php')
?>