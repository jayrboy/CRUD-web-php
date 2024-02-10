<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location: index.php");
    die();
}
?>

        <?php 
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];
        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
        $sql = "SELECT * FROM user WHERE login = '$login' AND password = sha1('$passwd')";
        $result = $conn->query($sql);

        if ($result->rowCount() == 1) {
            $data=$result->fetch(PDO::FETCH_ASSOC);
            $_SESSION["login"]=$data["login"];
            $_SESSION['role']=$data["role"];
            $_SESSION['user_id']=$data["id"];
            $_SESSION['id']=session_id();
            header("location:index.php");
            die();
        }
        else {
            $_SESSION['error'] = 1;
            header("location: login.php");
            die();
        }
        $conn = null;
        ?>
