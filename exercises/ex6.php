<?php
    class Person{
        private $fName;
        private $lName;

        function __construct(string $fName, string $lName){
            $this->SetName($fName, $lName);
        }
        public function SetName(string $fName, string $lName){
            $this->fName = $fName;
            $this->lName = $lName;
        }
        public function GetFName(){
            return $this->fName;
        }
        public function GetLName(){
            return $this->lName;
        }
        public function GetName(){
            $fullName = $this->lName;
            $fullName .= ' ' . $this->fName;
            return $fullName;
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>
<body>
    <?php
        $person = new Person('Jean', 'Dupont');

        echo $person->GetName();
    ?>
</body>
</html>