<?php
session_start();
if($_SESSION['role'] != 'a') {
    header("location: index.php");
    die();
}else{
    echo "Delete Web Board $_GET[id]";
}
?>