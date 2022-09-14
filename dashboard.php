<?php
    if(isset($_POST['newtask'])){

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
            $taskName = '<p class="task-name">' . $value['name'] . '</p>';
            $taskProgress = '<p class="task-progress">' . $value['progress'] . '</p>';
            // TODO: delete button
            echo '<li class="task-element">' . $taskProgress . $taskName . '</li>';
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
<ul class="tasklist">
<?php GetTasks(); ?>
</ul>
