<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="text-align: center;">

    <h1 class="second">Webboard KakKak</h1>
    <hr>
    <div>

        <?php 
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];

        if ($login == "admin" && $passwd == "ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN <br>";
        }
        elseif ($login == "member" && $passwd == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
        }
        else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }
        ?>
     <br>
        <a href="index.php" class="btn">Back to Web Board</a>

    </div>


</body>

</html>