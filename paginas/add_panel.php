<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="wallp">
    <h1 class="title" align="center">Alta de Artículos</h1>
    <center>
        <form action="add_panel_art.php" method="post">
            <p>Ingrese el nombre del artículo:</p>
            <input type="text" name="nombre" size="30" placeholder="Ingrese el nombre del artículo" required>
            <p>Ingrese la descripcion del artículo:</p>
            <textarea name="descripcion" cols="50" rows="5" placeholder="Ingrese la descripcion"></textarea>
            <p>Ingrese el precio:</p>
            <input type="text" name="precio" size="30" placeholder="Ingrese el precio" required>
            <br><br>
            <input type="submit" value="Confirmar">
            <a href="list_panel.php"><input type="button" value="Cancel"></a>
        </form>
    </center>
</body>

</html>