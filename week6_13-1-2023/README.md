# index.php
    <ul>
    <?php 
    for($i=1;$i <=10; $i++) {
        echo "<li><a href=post.php?id=$i> กระทู้ที่ $i </a></li>";
    }
    ?>
    </ul>
![image](https://user-images.githubusercontent.com/73011056/212308895-b5b441ee-c8ae-4d98-8782-1c7976b27f1f.png)

# vierify.php
    <?php 
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];

        if ($login == "admin" && $passwd == "ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN <br>";
        }
        elseif ($login == "member" && $passwd == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
        }
        else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }
    ?>
![image](https://user-images.githubusercontent.com/73011056/212313455-201782f8-ed60-4414-ad2b-cc4041e5971c.png)

# post.php
    <?php
    if ($id = $_GET['id'] % 2)
        echo "เป็นกระทู้หมายเลขคี่";
    else
        echo "เป็นกระทู้หมายเลขคู่";
    ?>
![image](https://user-images.githubusercontent.com/73011056/212313983-a3fbd954-be4c-4f14-a177-23b6e78aa6a1.png)


