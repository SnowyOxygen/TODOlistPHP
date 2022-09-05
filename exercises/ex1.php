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
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <?php
        $jeanDuJardin = new Person('Jean', 'Dujardin');

        echo 'Prénom: ' . $jeanDuJardin->GetFName() . ' Nom: ' . $jeanDuJardin->GetFName() . '<br/>';
        echo 'Prénom: ' . $jeanDuJardin->GetFName() . '<br/>Nom: ' . $jeanDuJardin->GetLName();

    ?>
</body>
</html>