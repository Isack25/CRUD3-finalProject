<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="#727272">
    <h2 align="center">Edit Product</h2>

    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexion");

    $registro = $mysql->query("select nombre,
                                        codigo,
                                        descripcion, 
                                        precio 
                                    from productos where codigo=$_REQUEST[codigo]") or

        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
    ?>
        <form action="edit_alta_panel.php" method="post">
            <p align="left">Nombre del Artículo:</p>
            <input type="text" name="nombre" size="30" value="<?php echo $reg['nombre']; ?>" placeholder="Nombre del artículo">
            <br>
            <p align="left">Descripción del Artículo:</p>
            <!-- textarea{margin-right:10px;}
            #con-css{resize:none;} -->
            <textarea name="descripcion" cols="50" rows="5"><?php echo $reg['descripcion']; ?></textarea>
            <br>
            <p align="left">Precio del Artículo:</p>
            <input type="text" name="precio" size="30" value="<?php echo $reg['precio']; ?>" required>
            <br>
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
            <br><br>
            <input type="submit" value="Confirmar">
            <a href="list_panel.php"><input type="button" value="Cancel"></a>
        </form>
    <?php
    } else
        echo '<center>No existe un artículo con dicho código</center>';

    $mysql->close();
    ?>
</body>

</html>