<?php
    class Table{
        private $table = [];

        function __construct($values){
            $this->table = $values;
        }
        public function GetValueAt($i){
            return $this->table[$i];
        }
        public function GetInRange($i, $j){
            return array_slice($this->table, $i, $j - $i);
        }
        public function AddElements($i){
            array_push($this->table, $i);
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <?php
        $table = new Table([36, "Garfield", 123.50, "chat"]);
        $table->AddElements('roux');

        echo $table->GetValueAt(1) . ' est un ' . $table->GetValueAt(3) . ' ' . $table->GetValueAt(4) . '.';
    ?>
</body>
</html>