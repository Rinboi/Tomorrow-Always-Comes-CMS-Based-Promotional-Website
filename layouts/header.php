<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<link rel="stylesheet" href="styles/navbar.css">

<header>
        <div id="top_header">
            <div class="container">
                <p>Promotional Website for <?php echo $websiteTitle; ?></p>
                <div class="top_nav">
                    <?php
                        if(isset($_SESSION['admin_logged_in'])){
                            echo '
                                <a href="serverside/logout.inc.php">Logout Admin</a>
                            ';
                        }
                        else{
                            echo '
                                <a href="admin.php">Admin Login</a>
                            ';
                        }
                    ?>
                </div>
            </div>
                    </div>
                    <div class="nav-wrapper">
            <div class="logo-container">
                <a href="./index.php"><img class="logo" src="./images/<?php echo $websiteLogo; ?>" alt="Logo"></a>
            </div>
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                        <li class="nav-tab"><a href="index.php">Home</a></li>
                        <li class="nav-tab"><a href="about_us.php">About</a></li>
                        <li class="nav-tab"><a href="gallery.php">Gallery</a></li>
                        <li class="nav-tab"><a href="community.php">Community</a></li>
                        <li class="nav-tab"><a href="online_registration.php">Registration</a></li>
                        <?php
                            if(isset($_SESSION['admin_logged_in'])){
                                echo '<li class="nav-tab"><a href="admin_dashboard.php">Admin Dashboard</a></li>';
                            }
                        ?>
                </div>
                    </div>
                     

                    </ul>
                </nav>

    </header>

    