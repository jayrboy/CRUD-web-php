<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr> หมวดหมู่ :
    <select name="" id="">
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>    
    </select>
    <a href="login.html" style="float:right">เข้าสู่ระบบ</a>
    <ul>
    <?php 
    for($i=1;$i <=10; $i++) {
        echo "<li><a href=post.php?id=$i> กระทู้ที่ $i </a></li>";
    }
    ?>
    </ul>
</body>
</html>
