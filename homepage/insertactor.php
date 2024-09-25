<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage insert data</title>
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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center form-title mb-5">Insert Actors Information</h2>
                    <form method="post" action="insertactorsuccess.php">
                        <div class="mb-3">
                            <label for="aid" class="form-label">รหัสนักแสดง</label>
                            <input type="text" class="form-control" name="aid" id="aid" placeholder="กรอกรหัสนักศึกษา">
                        </div>

                        <div class="mb-3">
                            <label for="aname" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="aname" id="aname" placeholder="กรอกชื่อ">
                        </div>

                        <div class="mb-3">
                            <label for="alastname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="alastname" id="alastname" placeholder="กรอกนามสกุล">
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">อายุ</label>
                            <input type="number" class="form-control" name="age" id="age" placeholder="กรอกอายุ">
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">เพศ</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">ชาย</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">หญิง</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-block">บันทึก</button>
                        </div>
                    </form>
                    <br>
                    <div class="d-grid">
                        <a href="actors.php" class="btn btn-primary btn-block">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>