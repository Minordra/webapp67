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
    $sql_update="INSERT INTO dvd_movies(movie_id,title,genre,price,release_date) VALUES ('$_POST[movie_id]','$_POST[title]','$_POST[genre]' ,'$_POST[price]' ,'$_POST[release_date]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=movie.php");
    }

?> 

</body>
</html>
