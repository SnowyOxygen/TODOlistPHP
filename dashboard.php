<?php
    $JSONfile = file_get_contents('bdd.json');
    $JSONdata = json_decode($JSONfile, true);

    $oldTasks = GetTasks();
    var_dump($oldtasks);

    class Task{
        private $task = ""; //tache à faire
        private $status = ""; //à faire, en cours, fait
        private $date = [0, 0, 0]; // jj, mm, yyyy
        private $hour = [0, 0]; // hh, mm

        function __construct($task, $status, $date = [0, 0, 0], $hour = [0, 0]){
            $this->task = $task;
            $this->status = $status;

            if($date != [0, 0, 0]){
                $this->date = $date;
            }
            if($hour != [0, 0]){
                $this->hour = $hour;
            }
        }

        #region Get
        public function GetTask(){
            return $this->task;
        }
        public function GetStatus(){
            return $this->status;
        }
        public function GetDate(){
            return $this->task;
        }
        public function GetHour(){
            return $this->task;
        }
        #endregion

    }
    
    function GetTasks(){ //Fait une liste d'objets de tâches
        global $JSONdata;

        $tasks = [];

        foreach ($JSONdata as $key => $value) {
            $tache = $value['tache'];
            $status = $value['status'];
            $hour = $value['hour'];
            $minute = $value['minute'];
            $day = $value['day'];
            $month = $value['month'];
            $year = $value['year'];

            array_push($tasks,
            new Task($tache, $status,
                     [$day, $month, $year],
                     [$hour, $minute]));           
        } 
        return $tasks;
    }

    function ShowTasks(){ //Fait apparaître les tâches dans la BDD
        foreach ($oldTask as $key => $task) {
            echo '<li id="task">' . $task->GetTask() . '</li>';
        }
    }
    function NewTaskForm(){ //Fait apparaître une formulaire pour une nouvelle tâche

    }
    
    echo '<ul id="taskList">';
?>