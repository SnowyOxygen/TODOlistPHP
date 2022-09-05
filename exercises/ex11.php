<?php
    class StyleString{
        private $str;

        function __construct($str){
            $this->str = $str;
        }
        public function Bold(){
            return '<b>' . $this->str . '</b>';
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex11</title>
</head>
<body>
    <?php
        $str = new StyleString('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint labore facere delectus totam molestias nulla explicabo voluptate provident a blanditiis expedita doloribus minima, aperiam, dolore, optio omnis cumque? Ut, deleniti!');
        echo $str->Bold();
    ?>
</body>
</html>