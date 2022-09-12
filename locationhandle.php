<?php
    session_start();

    $JSONFile = file_get_contents('bdd.json');
    $JSONData = json_decode($JSONFile, true);

    if(isset($_POST) && array_key_exists('username', $_POST)){
        UsernameHandler();
    }
    elseif(isset($_POST) && array_key_exists('newuser', $_POST)){
        NewUserHandler();
    }

    //When a user is created
    function NewUserHandler(){
        global $JSONData;

        $safeUser = strip_tags($_POST['newuser']);

        $_SESSION['username'] = $safeUser;

        $JSONData[$safeUser] = [];
        $encode = json_encode($JSONData);
        file_put_contents('bdd.json', $encode);
        unset($_POST);

        header('Location: /todolist/TODOlistPHP');
    }
    //Called when a username is chosen
    function UsernameHandler(){
        //XSS Security
        $safeUser = strip_tags($_POST['username']);

        $_SESSION['username'] = $safeUser;
        unset($_POST['username']);

        header('Location: /todolist/TODOlistPHP'); 
    }
?>