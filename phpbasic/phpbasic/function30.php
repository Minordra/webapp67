<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function addFive(&$num){
            $num += 5;
        }
        function addSix(&$num){
            $num += 6;
        }
        $original = 10;
        
        addFive($original);
        echo"Original value is $original<br>";

        addSix($original);
        echo"Original value is $original<br>";

    ?>
</body>
</html>