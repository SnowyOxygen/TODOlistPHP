<?php
    $JSONFile = file_get_contents('bdd.json');
    $JSONData = json_decode($JSONFile, true);

    function GetUsers(){
        global $JSONData;

        foreach ($JSONData as $key) {
            echo '<li class="user-element"><button class="user-button">' . $key . "</button></li>";
        }
    }
    function SetUser($username){
        $_SESSION['username'] = $username;
    }
    function CreateUser(){
        global $JSONData;
    
        $userData = [{}];
        //TODO: Save to file / check structure to append dict element
        array_push($JSONData, $username => $userData)
    }
    function SubmitHandler(){
        // prevent default
    }

    echo '
        <h1 class="choose">Choissisez un utilisateur.</h1>
        <div>
            <ul class="user-list">' . GetUsers() . '</ul>
        </div>
        <p class="new-user">Create user:</p>
        <form action="" method="post">
            <input type="text" placeholder="username" required maxlength="16"/>
            <input type="submit"/>
        </form>
    ';

?>