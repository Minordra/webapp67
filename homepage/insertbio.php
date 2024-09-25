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
          <li class="nav-item"><a href="actors.php" class="nav-link">Actors</a></li>
          <li class="nav-item"><a href="member.php" class="nav-link active">Member</a></li>
          <li class="nav-item"><a href="movie.php" class="nav-link">Movie</a></li>

        </ul>
      </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center form-title mb-5">Insert Member Information</h2>
                    <form method="post" action="insertbiosuccess.php">
                        <div class="mb-3">
                        <label for="mid" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" class="form-control" name="mid" id="mid" placeholder="กรอกรหัสนักศึกษา">
                        </div>

                        <div class="mb-3">
                        <label for="mname" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="mname" id="mname" placeholder="กรอกชื่อ">
                        </div>

                        <div class="mb-3">
                        <label for="mlastname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="mlastname" id="mlastname" placeholder="กรอกนามสกุล">
                        </div>

                        <div class="mb-3">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="กรอกที่อยู่">
                        </div>

                        <div class="mb-3">
                        <label for="telephone" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="กรอกเบอร์โทร">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-block">บันทึก</button>
                        </div>
                    </form>
                    <br>
                    <div class="d-grid">
                        <a href="member.php" class="btn btn-primary btn-block">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>