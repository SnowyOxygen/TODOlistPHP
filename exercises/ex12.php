<?php
    class ThisDateTime{
        public static function DateTimeNow(){
            return date("l jS \of F Y h:i:s A");
        }
        public static function DateTimeOffset($offset){
            return new DateTime($offset);
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex12</title>
</head>
<body>
    <?php
        $now = ThisDateTime::DateTimeNow();
        echo $now . '<br/>';

        $yesterday = ThisDateTime::DateTimeOffset('-1 days -2 hours');
        echo $yesterday->format('l jS \of F Y h:i:s A') . '<br/>';

        $in1year = ThisDateTime::DateTimeOffset('+395 days');
        echo $in1year->format('l jS \of F Y h:i:s A');
    ?>
</body>
</html>