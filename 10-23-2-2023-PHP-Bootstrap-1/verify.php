<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location: index.php");
    die();
}
?>

        <?php 
        $login = $_POST['username'];
        $passwd = $_POST['passwd'];

        if ($login == "admin" && $passwd == "ad1234"){
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
            # echo "ยินดีต้อนรับคุณ ADMIN <br>";
            header("location: index.php");
            die();
        }
        elseif ($login == "member" && $passwd == "mem1234") {
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
            # echo "ยินดีต้อนรับคุณ MEMBER <br>";
            header("location: index.php");
            die();
        }
        else {
            # echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
            $_SESSION['error'] = "error";
            header("location: login.php");
            die();
        }
        ?>
