<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Home Web Board</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<?php if (!isset($_SESSION['id'])) { ?>
    <!--Login Success-->
    <body style="text-align: left">
        <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
        <hr> หมวดหมู่ :
        <select name="" id="">
            <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float:right" class="btn">LOGIN</a>
        <ul>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
            }
            ?>
        </ul>
    </body>

<?php } else { ?>
    <!--Login Success-->
    <body style="text-align: left">
        <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
        <hr> หมวดหมู่ :
        <select name="" id="">
            <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        <div style="float:right;">
            <?php
            echo "ผู้ใช้: $_SESSION[username]&nbsp;&nbsp;";
            ?>
            <a href="logout.php" style="float:right" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')">LOGOUT</a>
        </div>
        <br><br>
        <a href="newpost.php">Create New</a>

        <ul style="list-style-type : disc;">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";
                if ($_SESSION['role'] == 'a') {
                    echo "&nbsp;&nbsp;<a href=delete.php?id=$i>Delete</a>";
                }
                echo "</li>";
            }
            ?>
        </ul>
    </body>
<?php } ?>

</html>