<?php 
    session_start();

    $JSONFile = file_get_contents('bdd.json');
    $JSONData = json_decode($JSONFile, true);

    function UpdateData(){
        global $JSONData;
        global $JSONFile;

        $JSONencode = json_encode($JSONData);
        file_put_contents('bdd.json', $JSONencode);
        $JSONFile = file_get_contents('bdd.json');
    }

    function Disconnect(){
        unset($_SESSION['username']);
    }

?><!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="pragma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="./todo.css">
</head>
<body>
    <?php
        if(array_key_exists('username', $_SESSION)){
            include 'dashboard.php';
        } else {
            include 'connection.php';
        }
    ?>
</body>
</html>