<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage for Editing Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="homepage.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        </a>
  
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="homepage.html" class="nav-link" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="actors.php" class="nav-link">Actors</a></li>
          <li class="nav-item"><a href="member.php" class="nav-link active">Member</a></li>
          <li class="nav-item"><a href="movie.php" class="nav-link">Movie</a></li>

        </ul>
      </header>
      
<?php
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=member.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM member WHERE mid ='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
        <h1 class="text-center form-title mb-5">Edit infotmation member</h1>
        <form method="post" action="editsuccess.php" class="row g-3">
            <input type="hidden" name="mid" id="mid" value="<?=$row['mid'];?>">
            <div class="col-md-6">
                <label for="mname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="mname" id="mname" value="<?=$row['mname'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="mlastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" required>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" name="address" id="address" value="<?=$row['address'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" value="<?=$row['telephone'];?>" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success">บันทึก</button><br>
                <a href="member.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </form>
                </div>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


