<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();


$row = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginpage/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginpage/css/style.css">
</head>

<body>
    <style>
        /* Full-screen background video */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            /* Keeps video in the background */
        }
    </style>
    <video autoplay muted loop class="video-background">
        <source src="loginpage/images/flat-bg.mp4" type=video/mp4>
    </video>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="opacity: 0.9">
                <div class="signup-content">
                    <form action="usercontroller/userlogreg.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">User login</h2>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                        </div>


                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        New User? <a href="userreg.php" class="loginhere-link">Register here</a>
                    </p>
                    <p style="text-align:center">go back <a href="index.php" class="loginhere-link">Home</a></p>


                    <!-- <p>forgot password?<a href="userforgotemail.php?id=<?= $row['u_id']; ?>" style="color:red"> try new
                            password!</a></p> -->
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>