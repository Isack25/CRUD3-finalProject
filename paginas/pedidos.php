<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calas | Pedidos</title>
</head>

<body>
    <h2 align="center">Pedidos</h2>
    <form action="pedidos_art.php" method="post">
        <input type="text" name="name" placeholder="Nombre del cliente" required>
        <br><br>
        <b>Selecciona un Artículo</b>
        <select name="codigoarticulo">
            <?php
            $mysql = new mysqli("localhost", "root", "", "calas");
            if ($mysql->connect_error)
                die("Problemas con la conexion");

            $registros = $mysql->query("select codigo,nombre,descripcion from productos") or
                die($mysql->error);
            while ($reg = $registros->fetch_array()) {
                echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['nombre'] . "</option>";
            }
            ?>
        </select>
        <br><br>
        <b>Cantidad:</b>
        <input type="number" name="cantidad" required>
        <br><br>
        <b>Descripcion:</b><br>
        <textarea name="service" cols="30" rows="5" required></textarea>
        <br><br>
        <input type="tel" name="" name="phone" placeholder="(Código de área) Número">
        <br><br>
        <b>Direccion:</b><br>
        <textarea name="location" cols="30" rows="5" required></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>