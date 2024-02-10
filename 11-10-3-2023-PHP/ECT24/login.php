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
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <!-- Import Bootstrap Online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body style="text-align: center;">
    <div class="container">

        <h1 class="second mt-3">Webboard Jakkrit</h1>
        <?php include "nav.php"; ?>
        <br>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <?php
                if(isset($_SESSION['error'])) {
                    echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง </div>";
                    unset($_SESSION['error']);
                }
                ?>
                <div class="card text-dark bg-light">
                    <div class="card-header" style="text-align: left">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group" style="text-align: left">
                                <label class="form-label">Login : </label><input type="text" name="login" class="form-control" required>
                            </div>

                            <div class="form-group" style="text-align: left">
                                <label class="form-label">Password : </label><input type="password" name="passwd" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-secondary btn-sm mt-2" type="submit">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <br>
        <div>
            Not Here an Account <a href="register.php" class="btn">Register</a>
        </div>
    </div>

</body>

</html>