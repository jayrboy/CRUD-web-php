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
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">

</head>

<body style="text-align: center;">

    <h1 class="second">Webboard KakKak</h1>
    <hr>

    <form action="verify.php" method="post">

        <table align="center">
            <tr>
                <td colspan="2 " style="background-color: #6CD2FE;" class="second">Login Form</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="40" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwd" size="40" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Login</button>
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