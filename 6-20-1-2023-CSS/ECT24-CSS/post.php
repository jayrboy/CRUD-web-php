<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>


<body>
    <h1>PHP WEB BOARD</h1>
    <hr>

    <div>
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?><br>
        <?php
        if ($id = $_GET['id'] % 2)
            echo "เป็นกระทู้หมายเลขคี่";
        else
            echo "เป็นกระทู้หมายเลขคู่";
        ?>
    </div>
    <br>

    <form action="verify.php" method="post">
        <table align="center">
            <tr>
                <td colspan="2 " style="background-color:#123456; color:white; height:40px;">
                    COMMENT</td>
            </tr>
            <tr>
                <td>
                    <textarea name="" id="" cols="40" rows="15"></textarea>
                </td>
            </tr>
            <tr style="height: 34px;">
                <td colspan="2 " style="background-color: #dfe2e6;">
                    <button style="color:#fff;background-color: #3e6a96; font-weight:bold;">POST COMMENT</button>
                </td>
            </tr>

        </table>
    </form>

    <br>
    <a href="index.php" class="btn">BACK</a>



</body>



</html>