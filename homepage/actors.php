<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this show member information webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header{
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        /* Custom CSS เพื่อเพิ่มสีและจัดแนว */
        td {
            text-align: center; /* จัดข้อความให้อยู่กึ่งกลาง */
            vertical-align: middle; /* จัดให้อยู่กึ่งกลางแนวตั้ง */
        }
        td:nth-child(odd) {
            background-color: #f2f2f2; /* เพิ่มสีพื้นหลังสลับ */
        }
        td:hover {
            background-color: #d3e0ea; /* เปลี่ยนสีเมื่อ hover */
        }
        /* ตกแต่งปุ่ม */
        .btn-edit {
            background-color: #4CAF50;
            color: white;
            border-radius: 6px;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .btn-edit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
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
        require 'conn.php';
        $sql = "SELECT * FROM actors";
        $result = $conn->query($sql);
        if(!$result){
            die("Error : ". $conn->$conn_error);
        }
    ?>
    <div class="container mt-5">
    <h1 class="text-center mb-4">Actors</h1><br>  
    <!-- create student table -->
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="table-dark text-center">
                    <th class="table-primary">รหัสนักแสดง</th>
                    <th class="table-info">ชื่อ-นามสกุล</th>
                    <th class="table-info">อายุ</th>
                    <th class="table-info">เพศ</th>
                    <th class="table-info"> ธุรกรรม </th>
                </tr>     
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["age"]."</td>"."<td>".$row["gender"]."</td>"."<td>"."<a href='editactor.php?aid=".$row["aid"]."'><button class='btn-edit'> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>   
        <!-- close table --> 
        <br>
        <a href='insertactor.php'><button class="btn btn-warning"> Insert Actors</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
