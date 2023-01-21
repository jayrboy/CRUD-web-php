<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Delete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
    <div>

        <?php
        session_start();
        if ($_SESSION['role'] != 'a') {
            header("location: index.php");
            die();
        } else {
            echo "Delete 'กระทู้ที่ $_GET[id]'";
        }
        ?>
    </div>
    <br>
    <a href="index.php" class="btn">BACK</a>

</body>

</html>