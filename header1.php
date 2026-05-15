<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: wheat">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.php">Glam Heaven<span class="color-b"></span></a>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <?php
                $current_page = basename($_SERVER['SCRIPT_NAME']); // Get current page filename
                ?>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"
                        href="index.php">Home</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'packages.php') ? 'active' : ''; ?>"
                        href="packages.php">Packages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"
                        href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"
                        href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'bookings.php') ? 'active' : ''; ?>"
                        href="bookings.php">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'profile.php') ? 'active' : ''; ?>"
                        href="profile.php">Profile</a>
                </li>

                <?php if (isset($_SESSION['u_id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'userlogout.php') ? 'active' : ''; ?>"
                            href="userlogout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'userlogin.php') ? 'active' : ''; ?>"
                            href="userlogin.php">Login</a>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav><!-- End Header/Navbar -->