<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Import Offline-->
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    
</head>

<?php if(!isset($_SESSION['id'])) { #ไม่ได้ล็อคอิน ?>
<body>
    <h1 style="text-align: center;" class="second">Webboard KakKak</h1>
    <hr> หมวดหมู่ :
    <select name="" id="">
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>    
    </select>
    <a href="login.php" style="float:right" class="btn">Login</a>
    <ul>
    <?php 
    for($i=1;$i <=10; $i++) {
        echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
    }
    ?>
    </ul>
</body>

<?php } else { # ล็อคอิน ?>
<body>
    <h1 style="text-align: center;" class="second">Webboard KakKak</h1>
    <hr> หมวดหมู่ :
    <select name="" id="">
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>    
    </select>

    <div style="float:right;">
    <?php
        echo "USER : $_SESSION[username] &nbsp;";
    ?>
    <a href="logout.php" style="float:right" class="btn">Logout</a>
    </div>
    <br>
    <a href="newpost.php">Create New</a>

    <ul style="list-style-type : disc;">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<li><a href=delete.php?id=$i>กระทู้ที่ $i</a>";
        if ($_SESSION['role'] == 'a') {
            echo "&nbsp; &nbsp; &nbsp; <a href=delete.php?id=$i>Delete</a>";
        }
        echo "</li>";
    }
    ?>
    </ul>

</body>

<?php } ?>



</html>