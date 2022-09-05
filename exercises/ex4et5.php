<?php
    class Math{
        private $a;
        private $b;

        function __construct($a, $b){
            $this->a = $a;
            $this->b = $b;
        }
        public function Addition(){
            return $this->a + $this->b;
        }
        public function Multiply(){
            $result = $this->a;
            $result *= $this->b;
            return $result;
        }
        public function GetA(){
            return $this->a;
        }
        public function GetB(){
            return $this->b;
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4et5</title>
</head>
<body>
    <?php
        $math1 = new Math(50, 30);
        $math2 = new Math(80, 17);

        echo $math1->GetA() . ' + ' . $math1->GetB() . ' = ' . $math1->Addition() . '</br>';
        echo $math2->GetA() . ' * ' . $math2->GetB() . ' = ' . $math2->Multiply();
    ?>
</body>
</html>