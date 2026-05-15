<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();


$image=$_GET['pr'];
$sname=$_GET['aa'];
$bname=$_GET['bb'];
$bdate=$_GET['bdat'];
$price=$_GET['cc'];
$fp_id=$_GET['ff'];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginpage1/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginpage1/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content" style="background: rgba(255,255,255,0.5)">
                    <form action="usercontroller/firstuserpage.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <input type="hidden" name="image" value="<?php echo $image?>">
                        <input type="hidden" name="sname" value="<?php echo $sname?>">
                        <input type="hidden" name="bname" value="<?php echo $bname?>">
                        <input type="hidden" name="bdate" value="<?php echo $bdate?>">
                        <input type="hidden" name="price" value="<?php echo $price?>">
                        <input type="hidden" name="fp_id" value="<?php echo $fp_id?>">
                        <h2 class="form-title">Booking Form</h2>
                        <div class="form-group">
                            <input type="date" class="form-input" min="<?php echo date('Y-m-d')?>" name="date" id="name" placeholder="Your Name"/>
                        </div>

                         <div class="form-group">
                            <input type="time" class="form-input" name="time" id="name" placeholder="Your phone number"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="name" placeholder="Your phone number"/>
                        </div>

        
                        


                         <div class="form-group">
                            <textarea name="address" rows="3" cols="50" placeholder="enter your address"></textarea>
                        </div>


                       

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Book Now"/>
                        </div>
                    </form>
                    <!-- <p class="loginhere">
                        Have already an account ? <a href="userlogin.php" class="loginhere-link">Login here</a>
                    </p> -->
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage1/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage1/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>