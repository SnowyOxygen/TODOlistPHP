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
    <title>ex2</title>
</head>
<body>
    <?php
        $newTable = new Table([10, 50, 80, 28]);
        echo 'élément 0: ' . $newTable->GetValueAt(0) . '<br/>' .
             'élement 3: ' . $newTable->GetValueAt(3);
    ?>
</body>
</html>