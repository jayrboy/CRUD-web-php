<?php
session_start();
if (!isset($_POST['login'])) {
    header("location: index.php");
    die();
}


    $login = $_POST['login'];
    $passwd = sha1($_POST['passwd']);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

    $sql = "SELECT * FROM user WHERE login = '$login'";
    # query ดูข้อมูลใน database
    $result = $conn->query($sql);
    if ($result->rowCount() == 1) {
        $_SESSION['add_login'] = "error";
    }
    # ตรวจสอบ login แล้วไม่ซ้ำใน จะเพิ่มข้อมูลใน database
    else {
        $sql1 = "INSERT INTO user (login, password, name, gender, email, role)
                VALUES ('$login', '$passwd', '$name', '$gender', '$email', 'm')";
        # exec เพิ่ม แก้ไข ใน database
        $conn->exec($sql1);
        $_SESSION['add_login'] = "success";
    }
    $conn = null;
    header("location: register.php")

?>