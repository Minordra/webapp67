<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is webpage insertsuccess</title>
    <link rel="stylesheet"  href="style.css"> 
</head>
<body>      

<?php   
    require 'conn.php';
    $sql_update="INSERT INTO actors(aid,aname,alastname,age,gender) VALUES ('$_POST[aid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[age]' ,'$_POST[gender]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=actors.php");
    }

?> 



</body>
</html>
