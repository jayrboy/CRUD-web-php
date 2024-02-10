<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <!-- Import Bootstrap Online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body style="text-align: center;">

    <h1 class="second">Webboard KakKak</h1>
    <hr>

    <div>
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?><br>
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
        <table class="border" align="center">
            <tr class="bg-secondary text-white">
                <td colspan="2">Comment</td>
            </tr>
            <tr>
                <td><textarea class="form-control" name="message" style="height: 200px; width: 400px" required></textarea></td>
            </tr>
            <td colspan="2">
                <button class="btn btn-success btn-sm">Send a message</button>
            </td>
            </tr>
        </table>
    </form>
    <br>
    <div class="mt-3">
        <a href="index.php" class="btn btn-danger btn-sm">Back</a>
    </div>


</body>

</html>