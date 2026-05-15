<?php


define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

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

<body style="background-color: #bdc09a">
    <video style="width:100%; position: fixed;" autoplay muted loop>
        <source src="loginpage/images/7777.mp4" type=video/mp4>
    </video>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="opacity: 0.7">
                <div class="signup-content">
                    <form action="usercontroller/providerlogreg.php" method="POST" id="signup-form" class="signup-form"
                        enctype="multipart/form-data">
                        <h2 class="form-title">Beautician account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
                        </div>








                        <div class="form-group">
                            <input type="text" class="form-input" name="a" id="name" placeholder="Your phone number" />
                        </div>














                        <div class="form-group">
                            <h3>Upload your photo:</h3>
                            <input type="file" class="form-input" name="image" id="name" placeholder="enter photo" />
                        </div>
                        <div class="form-group">
                            <h3>Location:</h3>
                            <select name="loc" class="form-input">
                                <option>Select Your Location</option>

                                <?php

                                $stmts = $admin->ret("SELECT * FROM `location`");

                                while ($rowss = $stmts->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <option value="<?php echo $rowss['l_id'] ?>"><?php echo $rowss['name'] ?></option>
                                <?php } ?>

                            </select>


                        </div>


                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>



                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="providerlogin.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>