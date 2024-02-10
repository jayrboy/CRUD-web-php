<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body style="text-align: center;">

    <div class="container">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak by JR</h1>
        <?php include "nav.php"; ?>
        <br>

        <!--แบ่งส่วนเป็น 3 6 3 -->
        <div class="row">
            <div class="col-lg-3"></div>
            <!-- เพิ่มการ์ด 1 ใบใน code ในนี้ -->
            <div class="col-lg-6">
                <div class="card border-secondary-emphasis bg-light">
                    <div class="card-header bg-secondary text-white">ตั้งกระทู้ใหม่</div>
                    <div class="card-body">
                        <form action="newpost_save.php" method="post">
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-label">หมวดหมู่ :</label>
                                <div class="col-lg-9">
                                    <select name="category" class="form-select">
                                        <?php 
                                        $conn = new PDO("mysql:host=localhost; dbname=webboard; charset=utf8", "root", "");
                                        $sql = "SELECT * FROM category";
                                        foreach ($conn->query($sql) as $row) {
                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }
                                        $conn= null;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-label">หัวข้อ :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="topic" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-label">เนื้อหา :</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" name="comment" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <center>
                                        <button type="submit" class="btn btn-success btn-sm text-white">
                                            <i class="bi bi-caret-right-square me-1"></i>บันทึกข้อความ
                                        </button>
                                    </center>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>

        <div>
            <a href="register.php" class="btn btn-danger btn-sm">กลับไปหน้าหลัก</a>
        </div>

    </div>

</body>

</html>