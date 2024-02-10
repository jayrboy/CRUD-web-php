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

<body>

    <h1 style="text-align: center; " class="second">Create Account</h1>
    <hr>

    <form action="" method="post">
        <table align="center">
            <tr>
                <td colspan="2 " style="background-color: #6CD2FE; text-align: center; " class="second">Enter your New Account</td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text " name="login" size="40"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password " name="pwd" size="40"></td>
            </tr>
            <tr>
                <td>Fullname:</td>
                <td><input type="text " name="fullname" size="40"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <div>
                        <input type="radio" name="gender" value="m">Male<br>
                        <input type="radio" name="gender" value="f">Female<br>
                        <input type="radio" name="gender" value="o">Other<br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text " name="email" size="40"></td>
            </tr>

            <tr>
                <td colspan="2 " style="text-align: center;">
                    <button>Register</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <div style="text-align: center;">
        <a href="index.php" class="btn">Go to Web Board</a>
    </div>


</body>

</html>