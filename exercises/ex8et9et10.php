<?php
    class Table{
        private $table = [];

        function __construct($table){
            $this->table = $table;
        }

        public function GetValuesWhile(){
            $i = 0;
            while($i < count($this->table)){
                echo 'variable ' . $i . ' est égal à ' . $this->table[$i] . '<br/>';
                $i++;
            }
        }
        public function GetValuesFor(){
            for($i = 0; $i < count($this->table); $i++){
                echo 'variable ' . $i . ' est égal à ' . $this->table[$i] . '<br/>';
            }
        }
        public function GetValuesForeach(){
            $i = 0;
            foreach ($this->table as $key => $value) {
                echo 'variable ' . $i . ' est égal à ' . $value . '<br/>';
                $i++;
            }
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex8et9et10</title>
</head>
<body>
    <?php
        $table = new Table([5, 20, "hello", 69, 420]);

        $table->GetValuesFor();
        echo '<br/>';

        $table->GetValuesWhile();
        echo '<br/>';
        
        $table->GetValuesForeach();
    ?>
</body>
</html>