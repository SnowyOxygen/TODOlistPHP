<?php
    function GetTasks(){
        global $JSONData;

        $tasks = $JSONData[$_SESSION['username']];

        foreach ($tasks as $key => $value) {
            echo '<li>' . $value['name'] . '</li>';
        }
    }

    // Visual
    echo '<p class="title">Hello, ' . $_SESSION['username'] . '</p>';

    //New task form
    echo '
    <form action="" class="newtaskform" method="post">
        <input name="newtask" type="text" class="newtask">
        <select name="newprogress">
            <option value="to do">to do</option>
            <option value="in progress">in progress</option>
            <option value="completed">completed</option>
        </select>
        <input type="submit">
    </form>
    ';

    echo '<ul class="tasklist">';
    GetTasks();
    echo '</ul>';
?>
<script>

</script>