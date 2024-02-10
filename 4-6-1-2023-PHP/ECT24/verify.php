<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="text-align: center;">

    <h1>Webboard KakKak</h1>
    <hr>
    <div>
        ยินดีต้อนรับ คุณเข้าสู่ระบบสำเร็จ<br><br>
        Login = <?php echo $_POST['login'];?><br>
        <!-- <?php echo "Login = $_POST[login] <br> ";?> -->
        Password = <?php echo $_POST['passwd'];?><br>

    </div>

    <br>
    <div>
        เข้าสู่หน้า <a href="index.html">โปรแกรม</a>
    </div>

</body>

</html>