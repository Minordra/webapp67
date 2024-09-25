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
                        <li class="nav-item"><a href="actors.php" class="nav-link active">Actors</a></li>
                        <li class="nav-item"><a href="member.php" class="nav-link">Member</a></li>
                        <li class="nav-item"><a href="movie.php" class="nav-link">Movie</a></li>

                        </ul>
                    </header>

<?php
        if(!isset($_GET['aid'])){
            header("refresh: 0; url=actors.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actors WHERE aid ='$_GET[aid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
        <h1 class="text-center form-title mb-5">แก้ไขข้อมูลนักแสดง</h1>
        <form method="post" action="editactorsuccess.php" class="row g-3">
            <input type="hidden" name="aid" id="aid" value="<?=$row['aid'];?>">
            <div class="col-md-6">
                <label for="aname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="aname" id="aname" value="<?=$row['aname'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="alastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="alastname" id="alastname" value="<?=$row['alastname'];?>" required>
            </div>
            <div class="col-md-12">
                <label for="age" class="form-label">อายุ</label>
                <input type="number" class="form-control" name="age" id="age" value="<?=$row['age'];?>" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">เพศ</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?> required>
                <label for="male">ชาย</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?> required>
                <label for="female">หญิง</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success">บันทึก</button><br>
                <a href="actors.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


