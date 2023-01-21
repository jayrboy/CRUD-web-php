# verify.php
      <?php
        $login = $_POST['username'];
        $passwd = $_POST['passwd'];
        if ($login == "admin" && $passwd == "ad1234") {
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = "a";
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับคุณ ADMIN <br>";
        } elseif ($login == "member" && $passwd == "mem1234") {
            $_SESSION['username'] = "member";
            $_SESSION['role'] = "m";
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }
      ?>
# index.php
      <?php if (!isset($_SESSION['id'])) { ?>
    <!--Login Success-->
    <body style="text-align: left">
        <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
        <hr> หมวดหมู่ :
        <select name="" id="">
            <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float:right" class="btn">LOGIN</a>
        <ul>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
            }
            ?>
        </ul>
    </body>

<?php } else { ?>
    <!--Login Success-->
    <body style="text-align: left">
        <h1 style="text-align: center;" class="second">PHP WEB BOARD</h1>
        <hr> หมวดหมู่ :
        <select name="" id="">
            <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        <div style="float:right;">
            <?php
            echo "ผู้ใช้: $_SESSION[username]&nbsp;&nbsp;";
            ?>
            <a href="logout.php" style="float:right" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')">LOGOUT</a>
        </div>
        <br><br>
        <a href="newpost.php">Create New</a>

        <ul style="list-style-type : disc;">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";
                if ($_SESSION['role'] == 'a') {
                    echo "&nbsp;&nbsp;<a href=delete.php?id=$i>Delete</a>";
                }
                echo "</li>";
            }
            ?>
        </ul>
    </body>
<?php } ?>
