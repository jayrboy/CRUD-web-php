<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import Bootstrap Online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<?php if (!isset($_SESSION['id'])) { #ไม่ได้ล็อคอิน 
?>

    <body>
        <div class="container">
            <h1 style="text-align: center;" class="second">Webboard KakKak by JR</h1>

            <!-- เรียกใช้ navbar แบบไฟล์แยก -->
            <?php include "nav.php"; ?>

            <br>
            <div class="d-flex">
                <div>
                    <label for="">หมวดหมู่ :</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="Button2" data-bs-toggle="dropdown" aria-expanded="false">ทั้งหมด</button>
                        <ul class="dropdown-menu" aria-labelledby="Button2">
                            <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                            <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                            <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            <br>

            <table class="table table-striped">
                <?php

                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                $sql = "SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date FROM post as t1 
                        INNER JOIN user as t2 ON (t1.user_id=t2.id)
                        INNER JOIN category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch()) {
                    echo "<tr><td>[ $row[0] ]<a href=post.php?id=$row[2] 
                    style=text-decoration:none>$row[1]</a><br>$row[3] - $row[4]</td></tr>";
                }
                $conn = null;
                ?>
            </table>

        </div>
    </body>

<?php } else { # ล็อคอิน 
?>

    <body>
        <div class="container">
            <h1 style="text-align: center;" class="second">Webboard KakKak by JR</h1>

            <!-- เรียกใช้ navbar แบบไฟล์แยก -->
            <?php include "nav.php"; ?>

            <br>
            <div class="d-flex justify-content-between">
                <div>
                    <label for=""> หมวดหมู่ :</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="Button2" data-bs-toggle="dropdown" aria-expanded="false">ทั้งหมด</button>
                        <ul class="dropdown-menu" aria-labelledby="Button2">
                            <li><a href="#" class="dropdown-item"> ทั้งหมด</a></li>
                            <li><a href="#" class="dropdown-item"> เรื่องเรียน</a></li>
                            <li><a href="#" class="dropdown-item"> เรื่องทั่วไป</a></li>
                        </ul>
                    </span>
                </div>

                <div>
                    <a href="newpost.php" class="btn btn-success btn-sm "><i class="bi bi-plus "></i> สร้างกระทู้ใหม่</a>
                </div>
            </div>
            <br>

            <table class="table table-striped">

                <?php

                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                $sql = "SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date FROM post as t1 
                        INNER JOIN user as t2 ON (t1.user_id=t2.id)
                        INNER JOIN category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch()) {
                    echo "<tr><td>[ $row[0] ]<a href=post.php?id=$row[2]
                    style=text-decoration:none> $row[1] </a><br> $row[3] - $row[4]</td>";
                    if ($_SESSION['role'] == 'a') {
                        echo "<td><a href=delete.php?id=$row[2]>
                        <button type=button class='btn btn-danger btn-sm'>
                        <i class='bi bi-trash'></i></button></a></td>";
                    }
                    echo "</tr>";
                }
                $conn = null;

                ?>

            </table>







        </div>


    </body>

<?php } ?>



</html>