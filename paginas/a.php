<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pedidos en linea</title>
    <style type="text/css">
        .fondo {
            background: #FFFAB3;
        }

        .letra {
            font-family: Kristen ITC;
            color: black;
        }

        .tablas {
            background: #FCDDAF;
        }
    </style>
</head>
<body class="fondo">
    <h1 class="letra" align="center">Aqui puedes realizar tus pedidos en linea</h1>
    <form action="pedidos_alta.php" method="post">
        <table class="tablas" border="1">
            Escribe tu nombre, por favor:
            <input type="text" name="nombre" required>
            <br><br>
            Ingrese su correo electronico o número de teléfono, por favor:
            <input type="text" name="info" required>
            <br><br>
            Ingrese su dirección:</td>
            <input type="text" name="direccion">
            <br><br>
            Seleccione el servicio que desea:
            <select name="servicio">
                <?php
                $mysql = new mysqli("localhost", "root", "", "calas");
                if ($mysql->connect_error)
                    die("Problemas con la conexion a la base de datos");

                $registros = $mysql->query("select codigo,descripcion,precio from productos") or
                    die($mysql->error);
                while ($reg = $registros->fetch_array()) {
                    echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['descripcion'] . " | " . $reg['precio'] . "</option>";
                }
                ?>
            </select>

            <br><br>
            <input type="submit" value="Confirmar">
        </table>
    </form>
</body>
</html>