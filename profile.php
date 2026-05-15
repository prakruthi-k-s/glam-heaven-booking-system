<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();

if (!isset($_SESSION["u_id"])) {
    header("location:userlogin.php");
}

$id = $_SESSION['u_id'];

$stmtss = $admin->ret("SELECT * FROM `user` WHERE `u_id`='$id'");

$rowss = $stmtss->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Glam Heaven</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: EstateAgency - v2.2.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <style>
        /* Video Background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Tint Overlay */
        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            /* White tint with 80% opacity */
            z-index: -1;
        }

        /* Fix content hiding behind navbar */
        .about-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            background-color: rgba(244, 244, 244, 0);
            padding: 80px 20px;
            margin-top: 80px;
            border-radius: 10px;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: auto;
            align-items: center;
        }

        .about-text {
            flex: 1;
            padding-right: 20px;
        }

        .about-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column-reverse;
                text-align: center;
            }

            .about-text {
                padding-right: 0;
            }

            .about-image {
                margin-bottom: 20px;
            }
        }

        #main {
            display: grid;

            grid-template-columns: 40% 60%;
            max-width: 500px;
            height: 310.5px;
            background: linear-gradient(-45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.4));
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);

            margin: auto;
            margin-top: 140px;

        }

        #name {
            color: rgba(255, 255, 255, 0.6);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding: 0 40px;
        }

        #profilepic {
            height: 140px;
            width: 140px;
            box-shadow: 0 0 42px 0 rgba(255, 255, 255, 0.17);
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 3px solid rgba(255, 255, 255, 0.18);
            border-radius: 50%;
            object-fit: cover;
            object-position: 50% 10%;
        }

        #photo {

            display: flex;
            justify-content: center;
            align-items: center;
        }

        #info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .link {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0px 32px 0 rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            display: block;
            font-size: 40px;
            padding: 4px;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            margin: 10px;
            cursor: pointer;
        }

        .link:hover {
            transform: translateY(-2px);
            transition: all 0.5s;
            background: rgba(255, 255, 255, 0.5);

        }

        #github:hover a {
            background: -webkit-linear-gradient(rgb(124, 0, 124), #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #insta:hover a {
            background: -webkit-linear-gradient(45deg, #F6CE6D, #DD2B68, #AE32A9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #dribbble:hover a {
            background: -webkit-linear-gradient(45deg, #E45189, #E04B85);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #contacts {
            display: flex;
            flex-direction: row;

        }
    </style>

    <!-- Header/Navbar -->
    <?php include 'header1.php'; ?>

    <!-- Background Video -->
    <video class="video-background" autoplay muted loop>
        <source src="assets/img/1.mp4" type="video/mp4">
    </video>

    <!-- White Tint Overlay -->
    <div class="video-overlay"></div>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div id='main'>
                    <div id='photo'>
                        <img src='admin/admincontroller/<?php echo $rowss['image']; ?>' id='profilepic'>
                    </div>
                    <div id='info'>
                        <div id='name'>
                            <form action="usercontroller/userlogreg.php" method="post" enctype="multipart/form-data">



                                <input type="text" name="a" value="<?php echo $rowss['name']; ?>">

                                <input type="text" name="b" value="<?php echo $rowss['phone']; ?>">

                                <input type="text" name="c" value="<?php echo $rowss['address']; ?>">

                                <input type="text" name="d" value="<?php echo $rowss['email']; ?>">

                                <input type="text" name="e" value="<?php echo $rowss['password']; ?>">

                                <input type="file" style="margin:10px;" name="image">


                        </div>
                        <div id='contacts'>


                            <input type="submit" name="pupdate" class="btn btn-primary" value="Update Profile">


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include "footer.php" ?>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>