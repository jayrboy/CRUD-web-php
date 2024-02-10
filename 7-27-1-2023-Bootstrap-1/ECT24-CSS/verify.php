<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monitor-Sensor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 13px;
        }

        table,
        th,
        td {
            border: 1px solid #dfe2e6;
            width: auto;
            background-color: #fff;

        }

        th,
        td {
            width: 300px;
        }

        a {
            text-decoration: none;
            text-align: center;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>

<body style="text-align: center;">
    <br><br><br>
    <img src="php-logo.png" alt="logo" width="300px">

    <div>
        <table align="center">
            <tr>
                <td colspan="3" style="background-color:#123456; color:white; height:40px;">Back Office</td>
            </tr>
            <tr>
                <td style="height: 60px;">
                    <?php
                    $login = $_POST['username'];
                    $passwd = $_POST['passwd'];

                    if ($login == "admin" && $passwd == "ad1234") {
                        $_SESSION['username'] = "admin";
                        $_SESSION['role'] = "a";
                        $_SESSION['id'] = session_id();
                        echo "ยินดีต้อนรับคุณ ADMIN <br>";
                    } elseif ($login == "member" && $passwd == "mem1234") {
                        $_SESSION['username'] = "member";
                        $_SESSION['role'] = "m";
                        $_SESSION['id'] = session_id();
                        echo "ยินดีต้อนรับคุณ MEMBER <br>";
                    } else {
                        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
                    }
                    ?>
                </td>
            </tr>

            <tr style="height:34px;">
                <td colspan="3" style="background-color: #dfe2e6;">
                    <a href="index.php" style="color:#fff;background-color: #3e6a96;">เข้าสู่หน้าหลัก</a>

                </td>
            </tr>
        </table>
    </div>

</body>

</html>