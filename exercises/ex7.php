<?php
    class SwitchVariable{
        private $x;

        function __construct(){
            $this->x = mt_rand(1, 5);
        }

        public function ShowVariable(){
            switch($this->x){
                case(1):
                    return 'La variable est égale à 1';
                case(2):
                    return 'La variable est égale à 2';
                case(3):
                    return 'La variable est égale à 3';
                case(4):
                    return 'La variable est égale à 4';
                case(5):
                    return 'La variable est égale à 5';
                default:
                    return 'Not in range or wrong type';
            }
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>
<body>
    <?php
        $newValue = new SwitchVariable();
        echo $newValue->ShowVariable();
    ?>
</body>
</html>