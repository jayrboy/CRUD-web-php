<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <h1 style="text-align: center;" class="second">Webboard KakKak</h1>

    <hr> หมวดหมู่ :
    <select name="" id="">
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>    
    </select>

    <a href="login.html" style="float:right" class="btn">Login</a>

    <ul>
    <?php 
    for($i=1;$i <=10; $i++) {
        echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
    }
    ?>
    </ul>

    <footer class="second">
        <section>
            <h1><b>Follow</b></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil numquam, non sit molestias id culpa provident modi dolorum deleniti! Odit, libero. Animi iste magni dignissimos! Repellendus quod hic voluptate!</p>
        </section>
        <section>
            <h1><b>Connect With</b></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil numquam, non sit molestias id culpa provident modi dolorum deleniti! Odit, libero. Animi iste magni dignissimos! Repellendus quod hic voluptate!</p>
        </section>
    </footer>
    <footer class="second">
        <p>&copy;Copyright-2023</p>
    </footer>

</body>

</html>