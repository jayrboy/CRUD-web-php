<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-New Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            margin: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }

        * {
            padding: 0;
        }

        h1 {
            background-color: #123456;
            color: white;
            text-align: center;
            font-size: 100%;
            line-height: 120%;
            padding: 5% 0;
        }

        div {
            background-color: #fff;
            border: 1px solid #dfe2e6;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: none;
            color: red;
        }

        table,
        tr {
            border: 1px solid #dfe2e6;
            width: 300px;
            background-color: #fff;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
    <hr>

    <form action="verify.php" method="post">
        <table align="center">
            <tr>
                <td colspan="2 " style="background-color:#123456; color:white; height:40px; ">
                    COMMENT
                </td>
            </tr>
            <tr>
                <td>Account :</td>
                <td>
                    <?php echo "$_SESSION[username]" ?>
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
                <td>
                    <input type="text" name="" value="">
                </td>
            </tr>
            <tr>
                <td>Content :</td>
                <td>
                    <textarea rows="5" cols="23"></textarea>
                </td>
            </tr>
            <tr style="height: 34px;">
                <td colspan="2 " style="background-color: #dfe2e6;">
                    <button style="color:#fff;background-color: #3e6a96; font-weight:bold;">New Post</button>
                </td>
            </tr>

        </table>
    </form>
    <br>
    <a href="index.php" class="btn">BACK</a>

</body>

</html>