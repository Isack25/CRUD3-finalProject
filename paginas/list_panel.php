<!--Creado por - ISAAC TOVAR-->
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calas | Articles</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>

<body class="wallp">
    <h1 class="title" align="center">Panel de Mantenimiento</h1>
    <br>
    <center>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </center>
    <br>
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select codigo as codigoart,
                                        descripcion as descripcionart,
                                        precio,
                                        nombre as nombreart 
                                    from productos") or
        die($mysql->error);

    echo '<table align="center" border="1">';
    echo '<tr><th>Código</th><th>Nombre</th><th>Descripción</th><th>Precio</th>
            <th>Eliminar</th><th>Editar</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigoart'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombreart'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcionart'];
        echo '</td>';
        echo '<td>';
        echo $reg['precio'];
        echo '</td>';
        echo '<td>';
        echo '<a href="delete_panel.php?codigo=' . $reg['codigoart'] . '">Borrar</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="edit_panel.php?codigo=' . $reg['codigoart'] . '">Modificar</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '<tr><td colspan="6" align="center">';
    echo '<a href="add_panel.php">Agrega un nuevo artículo</a>';
    echo '</td></tr>';
    echo '<table>';

    $mysql->close();
    ?>
</body>

</html>