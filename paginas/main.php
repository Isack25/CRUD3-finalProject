<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Main</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
</head>
<body background="media/glitch.gif">
    <center>
        <?php
        session_start();
        error_reporting(0);
        $vsesion = $_SESSION['username'];
        if ($vsesion == null or $vsesion = '') {
            echo '<font><h1>¤ No tines acceso a esta Página Web</h1></font>';
            die();
        }
        ?>
        <h1 class="text">P A N E L  -  1</h1>
        <h3 class="text">Bienvenido/a: Administrador</h3>

        <p class="text"></p>
        <center><iframe name="myiframe" src="list_panel.php" width="65%" height="480px"></iframe></center>
        </section>
        <br><br><br>
        <a href="cerrar_sesion.php"><input type="button" value="Cerrar sesión"></a>
    </center>
</body>
</html>