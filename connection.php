<?php
    function GetUsers(){
        global $JSONData;

        $userList = '';

        foreach ($JSONData as $key => $value) {
            $userList .= '<option value="' . $key . '">' . $key . '</li>';
        }
        
        return $userList;
    }

    function CreateUser(string $username){
        global $JSONData;
        echo 'Creating User';

        $JSONData[$username] = [];
        UpdateData();
    }

    echo '
        <h1 class="choose">Choissisez un utilisateur.</h1>
            <form action="./locationhandle.php" method="post">
                <div>
                    <select name="username" class="user-select">' . GetUsers() . '</select>
                    <input type="submit">
                </div>
            </form>
        <p class="new-user">Create user:</p>
        <form action="./locationhandle.php" method="post">
            <input name="newuser" type="text" placeholder="username" required maxlength="16"/>
            <input type="submit"/>
        </form>
    ';

?>