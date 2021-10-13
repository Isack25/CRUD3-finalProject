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
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select id as codigoart,
                                        name as nameart,
                                        service,
                                        cantidad as cantidadart ,
                                        phone,
                                        location
                                    from clientes") or
        die($mysql->error);

    echo '<table align="center" border="1">';
    echo '<tr><th>Cliente</th><th>Pedido</th><th>Cantidad </th><th>Dirección</th>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['nameart'];
        echo '</td>';
        echo '<td>';
        echo $reg['service'];
        echo '</td>';
        echo '<td>';
        echo $reg['cantidadart'];
        echo '</td>';
        echo '<td>';
        echo $reg['location'];
        
    }
    echo '<tr><td colspan="6" align="center">';
    echo '<a href="pedidos.php">Agrega un nuevo artículo</a>';
    echo '</td></tr>';
    echo '<table>';

    $mysql->close();
    ?>
</body>

</html>