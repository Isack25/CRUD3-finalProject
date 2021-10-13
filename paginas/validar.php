<?php 
    session_start();
    $_SESSION['username'] = $_REQUEST['user'];

    if($_REQUEST['user'] == 'admin' and $_REQUEST['password'] == '12345')
        header("Location: main.php");
    else
        header("Location: login.php");
    
?>