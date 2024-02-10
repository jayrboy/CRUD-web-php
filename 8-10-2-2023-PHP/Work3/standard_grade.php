<?php 
    session_start();

    if(isset($_SESSION["gradeA"])) {
        header("location:input1.php");
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
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <center>
        <form action="input1.php" method="post">
            <h1>เกณฑ์การตัดเกรดวิชา Web Application Development</h1><br>
            เกรด A ต้องมากกว่าหรือเท่ากับ <input type="text" name="Aa" required> <br>
            เกรด B ต้องมากกว่าหรือเท่ากับ <input type="text" name="Bb" required> <br>
            เกรด C ต้องมากกว่าหรือเท่ากับ <input type="text" name="Cc" required> <br>
            เกรด D ต้องมากกว่าหรือเท่ากับ <input type="text" name="Dd" required> <br> <br>

            <input type="submit" value="ตกลง">
        </form>
    </center>
    
    </body>
</html>