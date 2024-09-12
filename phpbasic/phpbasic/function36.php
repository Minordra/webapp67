<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "Hello PHP";
        }
        $function_holder = "sayHello"; //ตั้งชื่อฟังก์ชั่นเป็น function_holder 
        $function_holder(); //เรียกใช้ฟังก์ชั่น

    ?>
</body>
</html>