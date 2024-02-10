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
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id'];?><br> 
    <?php
    if ($id = $_GET['id'] % 2)
        echo "เป็นกระทู้หมายเลขคี่";
    else
        echo "เป็นกระทู้หมายเลขคู่";
    ?>
    <br>
    <br>
    </div>

    <form action="post.php" method="get">

        <table style="border: 2px solid black; width:40%;" align="center">
            <tr>
                <td colspan="2 " style="background-color: #6CD2FE; ">Comment</td>
            </tr>
            <tr>
                <td style="text-align: center;" ><textarea name="message" rows="5" cols="40"></textarea></td>
            </tr>
                <td colspan="2 " style="text-align: center;">
                    <button>Send a message</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <div>
    <a href="index.php" class="btn">Back</a>
    </div>
    
    
    </body>
</html>