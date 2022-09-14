<?php

    #region Methods
    
    //Create a new task on $_Post['newtask']
    if(isset($_POST['newtask']) && $_POST['newtask'] != ''){

        if(isset($_SESSION['username'])){
            NewTask();
        }

        unset($_POST['newtask']);
        unset($_POST['newprogress']);
    }

    //Delete a given task with $_GET['delete'] and url
    if(isset($_GET['delete']) && $_GET['delete'] != ''){

        if(isset($_SESSION['username'])){
            DeleteTask();
        }

        header('Location: index.php');
    }

    //Update task progress with $_POST['changetaskprogress']
    if(isset($_POST['changetaskprogress'])){
        if(isset($_SESSION['username'])){
            UpdateTask();
        }

        unset($_POST['changetaskprogress']);
        unset($_POST['changetaskid']);
    }
    #endregion


    #region Task Functions

    //Change task progress in DB
    function UpdateTask(){
        global $JSONData;

        $progress = htmlspecialchars($_POST['changetaskprogress']);
        $key = htmlspecialchars($_POST['changetaskid']);

        $JSONData[$_SESSION['username']][$key]['progress'] = $progress;

        UpdateData();
    }

    //Delete task from DB
    function DeleteTask(){
        global $JSONData;

        $key = $_GET['delete'];

        unset($JSONData[$_SESSION['username']][$key]);

        UpdateData();
    }

    //Add task to DB
    function NewTask(){
        global $JSONData;

        $taskName = htmlspecialchars($_POST['newtask']);
        $taskProg = htmlspecialchars($_POST['newprogress']);
        $key = uniqid();

        $JSONData[$_SESSION['username']][$key] = [
            "name" => $taskName,
            "progress" => $taskProg
        ];

        UpdateData();
    }

    //Display tasks from DB
    function GetTasks(){
        global $JSONData;

        $tasks = $JSONData[$_SESSION['username']];

        foreach ($tasks as $key => $value) {
            $taskName = '<td>' . $value['name'] . '</td>';

            //Determine select option to be used as default value
            $progIndex = 0;
            switch($value['progress']){
                case('to do'):
                    $progIndex = 1;
                    break;
                case('in progress'):
                    $progIndex = 2;
                    break;
                default:
                    $progIndex = 3;
                    break;
            }

            //Form to show and change task progress
            $taskProgress = '<td>' . 
            '<form method="post">
                <select name="changetaskprogress">
                    <option value="to do"' . (($progIndex == 1) ? 'selected' : '') . '>To Do</option>
                    <option value="in progress"' . (($progIndex == 2) ? 'selected' : '') . '>In Progress</option>
                    <option value="completed"' . (($progIndex == 3) ? 'selected' : '') . '>Completed</option>
                </select>
                <input type="submit">
                <input type="hidden" name="changetaskid" value=' . $key . '>
            </form>' . '</td>';

            //Delete button
            $buttonAction = 'index.php?delete=' . $key;
            $delButton = '<td><a href="' . $buttonAction . '" class="task-delete">x</a></td>';

            //Task
            echo '<tr>' . $taskName . $taskProgress . $delButton . '</tr>';
        }
    }
    #endregion

?>
<div class="header">
    <?php
        echo '<p class="title">Hello, ' . $_SESSION['username'] . '</p>';
    ?>
    <a class="disconnect" href="?action=disconnect">disconnect</a>
</div>

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
<table>
    <tr>
        <th>Task</th>
        <th>Progress</th>
        <th>Action</th>
    </tr>

    <?php GetTasks(); ?>
</table>
