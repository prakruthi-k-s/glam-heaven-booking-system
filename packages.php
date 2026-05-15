<?php
include 'config.php';
$admin = new Admin();
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
                <div class="about-text">
                    <h2>Packages</h2>
                    <div class="row my-5">
                        <!-- Card 1 -->
                        <?php $st = $admin->ret("select * from `package` inner join `category` on package.cat_id=category.cat_id");
                        while ($ro = $st->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm">
                                    <img style="height:350px" src="admin/admincontroller/<?php echo $ro['p_image']; ?>"
                                        class="card-img-top" alt="Package 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo $ro['p_name']; ?></h5>
                                        <b class="card-title"><?php echo $ro['cat_name']; ?></b>
                                        <p class="card-text"><?php echo $ro['p_des']; ?>.</p>
                                        <a href="single_package.php?id=<?php echo $ro['pack_id']; ?>" class="btn btn-primary">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?Php } ?>
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