<?php
session_start();
if (isset($_SESSION['id'])) {
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
    <!-- Import Bootstrap Online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body>

    <h1 style="text-align: center;" class="mt-3">Webboard Jakkrit</h1>
    <?php include "nav.php" ?>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

                <?php 
                if(isset($_SESSION['add_login'])) {
                    if($_SESSION['add_login'] == 'error') {
                        echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                    }
                    else {
                        echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อย</div>";
                    }
                    unset($_SESSION['add_login']);
                }
            ?>
                <div class="card border-secondary-emphasis bg-light">
                    <div class="card-header bg-secondary text-white" style="text-align: center;">Register</div>
                    <div class="card-body">
                        <form action="register_save.php" method="post">

                            <div class="row">
                                <label class="col-lg-3 form-label">ชื่อบัญชี :</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="login" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 form-label">รหัสผ่าน :</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" name="passwd" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 form-label">ชื่อ-นามสกุล :</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 form-label">เพศ :</label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="m"> ชาย
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="f"> หญิง
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="o"> อื่นๆ
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 form-label">อีเมล :</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="email" required>
                                </div>
                            </div>

                            <div class="row mt-3" style="text-align: center;">
                                <div class="col-lg-12">
                                    <button class="btn btn-success btn-sm mt-2" type="submit"><i class="bi bi-person-fill-add"></i> สมัครสมาชิก</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div style="text-align: center;">
        <a href="index.php" class="btn btn-danger btn-sm">กลับไปหน้าหลัก</a>
    </div>


</body>

</html>