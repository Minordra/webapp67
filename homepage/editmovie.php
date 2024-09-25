<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage for Editing Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header{
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-weight: bold;
            color: #007bff;
        }
        .form-label {
            font-weight: bold;
        }       
    </style>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="homepage.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        </a>
  
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="homepage.html" class="nav-link" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="actors.php" class="nav-link">Actors</a></li>
          <li class="nav-item"><a href="member.php" class="nav-link">Member</a></li>
          <li class="nav-item"><a href="movie.php" class="nav-link active">Movie</a></li>

        </ul>
      </header>
<?php
        if(!isset($_GET['movie_id'])){
            header("refresh: 0; url=movie.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM dvd_movies WHERE movie_id ='$_GET[movie_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
        <h1 class="text-center form-title mb-5">Edit Movie Information</h1>
        <form method="post" action="editmoviesuccess.php" class="row g-3">
            <input type="hidden" name="movie_id" id="movie_id" value="<?=$row['movie_id'];?>">
            <div class="col-md-6">
                <label for="title" class="form-label">ชื่อเรื่อง</label>
                <input type="text" class="form-control" name="title" id="title" value="<?=$row['title'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="genre" class="form-label">ประเภท</label>
                <input type="text" class="form-control" name="genre" id="genre" value="<?=$row['genre'];?>" required>
            </div>
            <div class="col-md-12">
                <label for="price" class="form-label">ราคา</label>
                <input type="number" class="form-control" name="price" id="price" step="0.01" value="<?=$row['price'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="release_date" class="form-label">วันฉาย</label>
                <input type="date" class="form-control" name="release_date" id="release_date" value="<?=$row['release_date'];?>" required><br>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success">บันทึก</button><br>
                <a href="movie.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </form>
                </div>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


