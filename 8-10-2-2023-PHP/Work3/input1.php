<?php 
    session_start();

    if((!isset($_POST["Aa"])) && (!isset($_SESSION["gradeA"]))) {
        header("location:standard_grade.php");
        die();
    }
    if(isset($_POST["Aa"])) {
        $_SESSION["gradeA"] = $_POST["Aa"];
        $_SESSION["gradeB"] = $_POST["Bb"];
        $_SESSION["gradeC"] = $_POST["Cc"];
        $_SESSION["gradeD"] = $_POST["Dd"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <center>
        กรุณากรอกคะแนน
        <form action="grade.php" method="post">
            <p>
                ชื่อ-นามสกุล <input type="text" name="name" size="25" required>
                คะแนนที่ได้ <input type="text" name="score" size="5" required>คะแนน <br><br>
                <input type="submit" value="Submit">
            </p>
        </form>
    </center>
    
    </body>
</html>