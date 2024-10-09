<header>
    <div class="container">
        <h1>Parfum Gallery</h1>
        <nav>
            <ul>
                <?php 
                if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) { ?>
                    <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a') { ?>
                        <li><a href="daftar-parfum-admin.php">Daftar Parfum</a></li>
                        <li><a href="saran-user.php">Saran</a></li>
                    <?php } else { ?>
                        <li><a href="dashboarduser.php">Beranda</a></li>
                        <li><a href="parfum-user.php">Daftar Parfum</a></li>
                        <li><a href="dashboarduser.php#about">About Me</a></li>
                    <?php } ?>
                    <li><a href="../logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a></li>

                    
                <?php } else { ?>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="parfum.php">Daftar Parfum</a></li>
                    <li><a href="index.php#about">About Me</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="header-right">
            <div class="dark-mode-toggle">
                <label class="toggle-switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
</header>
