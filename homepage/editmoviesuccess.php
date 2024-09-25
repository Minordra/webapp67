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
$sql_update="UPDATE dvd_movies SET title='$_POST[title]',genre='$_POST[genre]' ,price='$_POST[price]' ,release_date='$_POST[release_date]' WHERE movie_id='$_POST[movie_id]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {
            
            echo "Edit Success <br>";
            header("refresh: 0; url=movie.php");
            }

        ?>
</body>
</html>