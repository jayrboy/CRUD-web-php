<?php # login failed
if (!isset($_SESSION['id'])) {;
?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #D3D3D3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-house-door-fill"></i> Home
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login.php">
                        <i class="bi bi-pencil-square"></i> เข้าสู่ระบบ
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<?php # login success
} else {
?>
    <nav class="navbar navbar-expand-lg" style="background-color: #D3D3D3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-house-door-fill"></i> Home</a>
            
            <ul class="navbar-nav">
                <div class="dropdown">
                    <a class="btn btn-outline-secondary dropdown-toggle btn-sm" href="login.php" type="button" id="Button1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-lines-fill"></i>
                        <?php echo $_SESSION['username']; ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="Button1">
                        <li>
                            <a href="logout.php" class="dropdown-item">
                                <i class="bi bi-power">ออกจากระบบ</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

<?php
}
?>