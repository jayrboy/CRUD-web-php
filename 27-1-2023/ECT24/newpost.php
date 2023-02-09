<?php
session_start();
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
                <td colspan="2 " style="background-color: #6CD2FE;" class="second">Create New Board</td>
            </tr>
            <tr>
                <td>Account :</td>
                <td><?php echo "$_SESSION[username]" ?>
                </td>
            </tr>
            <tr>
                <td>General :</td>
                <td>
                    <select>
                        <option value="">เรื่องทั่วไป</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Header :</td>
                <td><input type="" name="" value=""></td>
            </tr>
            <tr>
                <td>Content :</td>
                <td><textarea rows="5" cols="" ></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Save</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <div>
    <a href="register.php" class="btn">Back to Webboard</a>
    </div>

</body>

</html>