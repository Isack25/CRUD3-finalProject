<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
</head>
<body>
    <center>
        <div class="container">
            <img src="media/foto3.jpg" class="avatar">
            <h2>Login</h2>
            <form action="validar.php" method="post">
                <input type="text" name="user" placeholder="Ingrese su Usuario" required>
                <br>
                <input type="password" name="password" placeholder="Digite su Contraseña" required>
                <br><br>
                <input type="submit" value="Ingresar">
                <a href="../index.html"><input type="button" value="Return"></a>
            </form>
        </div>
    </center>
</body>
</html>