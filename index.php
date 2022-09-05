<?php
    session_start();

    if(isset($_POST['email'])){
        $email = htmlspecialchars($_POST['email']);
        $_SESSION['email'] = $email;
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO list</title>
</head>
<body>
    <?php
        if(isset($_SESSION['email'])){
            include 'dashboard.php';
        } else include 'connection.php';
    ?>
</body>
</html>