<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is webpage editsuccess</title>
    <link rel="stylesheet"  href="style.css"> 
</head>
<body>
<?php
            require 'conn.php';
$sql_update="UPDATE actors SET aname='$_POST[aname]',alastname='$_POST[alastname]' ,age='$_POST[age]' ,gender='$_POST[gender]' WHERE aid='$_POST[aid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=actors.php");
            }

        ?>
</body>
</html>