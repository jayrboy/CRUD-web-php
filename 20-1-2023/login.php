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
    <title>PHP-Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            text-align: center;
        }

        table,
        th {
            border: 1px solid #dfe2e6;
            width: 300px;
            background-color: #fff;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: none;
            color: red;
        }
    </style>
</head>

<body>
    <br><br><br>
    <img src="php-logo.png" alt="logo" width="300px">
    <!--Form Table Login-->
    <form action="verify.php" method="post">
        <table align="center">
            <tr>
                <td colspan="2 " style="background-color:#123456; color:white; height:40px;">
                    LOG IN</td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="passwd" required></td>
            </tr>
            <tr style="height: 35px;">
                <td colspan="2" style="background-color: #dfe2e6;">
                    <button style="color:#fff;background-color: #3e6a96; font-weight:bold;">Login</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <div>
        Not Here an Account <a href="register.php" class="btn">Register</a>
    </div>
</body>

</html>