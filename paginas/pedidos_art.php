<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión");

    $mysql->query("insert into articulos(name,service,cantidad,phone,location)
            values ('$_REQUEST[name]',
            '$_REQUEST[service]',
            '$_REQUEST[cantidad]',
            '$_REQUEST[phone]',
            '$_REQUEST[location]'") or
        die($mysql->error);

    echo '<center>El nuevo pedido se realizó con exito</center>';

    $mysql->close();
    ?>
    <br>
    <center> <a href="11alta_articulos.php"><input type="button" value="Regresar"></a></center>
</body>
</html>