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
      z-index: -2;
      /* Keeps video behind everything */
    }

    /* White Tint Overlay */
    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      /* White tint effect */
      z-index: -1;
      /* Places overlay above video, but below content */
    }

    /* Content Styling */
    .hero-content,
    .service-section,
    .about-section {
      position: relative;
      z-index: 1;
      text-align: center;
      color: black;
      /* Ensure text is visible */
    }

    .hero-content {
      padding: 150px 20px 50px;
    }

    .service-section {
      padding: 100px 0;
      display: flex;
      justify-content: center;
    }

    .service-card img {
      width: 100%;
      height: 300px;
      border-radius: 10px;
      margin-bottom: 20px;
      object-fit: cover;
    }

    .about-section {
      display: flex;
      text-align: center;
      justify-content: center;
    }
  </style>

  <!-- ======= Header/Navbar ======= -->
  <?php include 'header1.php'; ?>

  <!-- ======= Background Video & Tint ======= -->
  <video class="video-background" autoplay muted loop id="myVideo">
    <source src="assets/img/1.mp4" type="video/mp4">
  </video>
  <div class="video-overlay"></div> <!-- White Tint Overlay -->

  <!-- ======= Hero Section ======= -->
  <div class="hero-content">
    <h1>Welcome to Beautician Services</h1>
    <p>Your beauty, our passion</p>
  </div>

  <!-- ======= Services Section ======= -->
  <div class="service-section">
    <div style="background-color: rgba(245, 222, 179, 0.5); border-radius:10px; padding:50px; width:90%">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4 service-card">
          <img src="assets/img/about-1.jpg" alt="Facial">
          <h3>Facial Treatments</h3>
          <p>Relax and refresh your skin with our facial treatments.</p>
        </div>
        <div class="col-md-4 service-card">
          <img src="assets/img/22.jpg" alt="Makeup">
          <h3>Makeup Services</h3>
          <p>Get the perfect look for any occasion with our professional makeup artists.</p>
        </div>
        <div class="col-md-4 service-card">
          <img src="assets/img/yyy.jpg" alt="Haircut">
          <h3>Hair Styling</h3>
          <p>Trendy haircuts and styles to enhance your beauty.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= About Section ======= -->
  <div class="about-section">
    <div style="background-color: hsla(0, 17.60%, 73.30%, 0.50); padding: 100px 0; border-radius: 10px; width:90%">
      <h2>About Us</h2>
      <p class="container">Beautician is dedicated to providing top-notch beauty services. Our experienced team ensures
        customer satisfaction by offering the best beauty treatments and styling.</p>
    </div>
  </div>

  <div class="about-section mt-5">
    <div style="background-color: rgba(244, 244, 244, 0.8); padding: 100px 0; border-radius: 10px; width:100%">
      <h2 style="position:relative;top:-50px">Category</h2>


      <div class="row">
        <?php $stmt = $admin->ret("select * from `category` limit 3");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col-md-4 mb-4">
            <h4><?php echo $row['cat_name']; ?></h4>
            <p><?php echo $row['cat_des']; ?>. </p>
          </div>
        <?php } ?>


      </div>
    </div>
  </div>

  <?php include "footer.php" ?>
  <!-- End Footer -->

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