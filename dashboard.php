<?php
    if(isset($_POST['newtask']) && $_POST['newtask'] != ''){

        if(isset($_SESSION['username'])){
            NewTask();
        }

        unset($_POST['newtask']);
        unset($_POST['newprogress']);
    }

    function NewTask(){
        global $JSONData;

        $taskName = htmlspecialchars($_POST['newtask']);
        $taskProg = htmlspecialchars($_POST['newprogress']);

        array_push($JSONData[$_SESSION['username']],
                   ["name" => $taskName,
                    "progress" => $taskProg]);

        UpdateData();
    }

    function GetTasks(){
        global $JSONData;

        $tasks = $JSONData[$_SESSION['username']];

        foreach ($tasks as $key => $value) {
            $taskName = '<td>' . $value['name'] . '</td>';
            $taskProgress = '<td>' . $value['progress'] . '</td>';
            $delButton = '<td><button class="task-delete">x</button></td>';
            // TODO: delete button
            // TODO: color taskProgress based on progress
            echo '<tr>' . $taskName . $taskProgress . $delButton . '</tr>';
        }
    }

    // Visual
    echo '<p class="title">Hello, ' . $_SESSION['username'] . '</p>';
?>

<!-- New Task form -->
<form action="" class="newtaskform" method="post">
    <input name="newtask" type="text" class="newtask">
    <select name="newprogress">
        <option value="to do">to do</option>
        <option value="in progress">in progress</option>
        <option value="completed">completed</option>
    </select>
    <input type="submit">
</form>

<!-- Show existing tasks -->
<tr>
    <th>Task</th>
    <th>Progress</th>
    <th>Action</th>
</tr>
<?php GetTasks(); ?>
