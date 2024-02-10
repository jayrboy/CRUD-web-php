<?php 
    session_start();

    if(!isset($_SESSION["gradeA"])) {
        header("location:standard_grade.php");
        die();
    }
    if(!isset($_POST["name"]) || !isset($_POST["score"])){
        header("location:input1.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <?php
            $Name=$_POST["name"];
            $Score=$_POST["score"];

            if($Score <= 0) {
                $Result="-";
            }
            elseif ($Score >= $_SESSION["gradeA"]) {
                $Result="A";
            }
            elseif ($Score >= $_SESSION["gradeB"]) {
                $Result="B";
            }
            elseif ($Score >= $_SESSION["gradeC"]) {
                $Result="C";
            }
            elseif ($Score >= $_SESSION["gradeD"]) {
                $Result="D";
            }
            elseif ($Score >= $_SESSION["gradeF"]) {
                $Result="F";
            }

            echo "<h4> ชื่อ $Name ได้คะแนน $Score คะแนน</h4>";?>
            <h2>ได้เกรด <span style="color: red;"><?php echo $Result ?> </span></h2>

            <a href="input1.php">กลับไปหน้ากรอกคะแนน</a> <br>
            <a href="clear.php">เปลี่ยนเกณฑ์การให้คะแนน</a>

    </center>
    
    </body>
</html>