<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["fp_id"])) {
       header("location:providerlogin.php");
}

$id=$_SESSION['fp_id'];
$up=$_GET['up'];


 $stm=$admin -> ret("SELECT * FROM `beautician` WHERE `fp_id`='$id'");
 $row=$stm->fetch(PDO::FETCH_ASSOC);


$stmm=$admin -> ret("SELECT * FROM `addserv` WHERE `flat_id`='$up'");
$rowi=$stmm->fetch(PDO::FETCH_ASSOC);


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

 
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: wheat">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="firstproviderpage.php">Beautician<span class="color-b"></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="firstproviderpage.php">Home</a>
          </li>




          <li class="nav-item">
            <a class="nav-link" href="firstproviderpage0.php">View post</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">View Bookings</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">chat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">payment</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="providerlogout.php">logout</a>
          </li>
          
        </ul>
      </div>
      <!-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <!-- End Intro Section -->
<!-- End #main -->




<!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="loginpage/images/444.jpg" alt="" class="img-fluid" width="1500px">
            </div>
            <div class="sinse-box" style="background-color: wheat">
              <h3 class="sinse-title">Welcome to beautician
                <span></span>
                <br> 
              </h3>
              <p>Post Your Service</p>
            </div>
          </div>
        
        </div>
      </div>





    </section>


    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
         





          <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
           
           
            <div class="form-comments">
              <div class="title-box-d">
                <h3 class="title-d">Post A Service</h3>
              </div> 
              <form class="form-a" action="usercontroller/addserv.php" method="post" enctype="multipart/form-data">
                <div class="row">

                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="inputName">Service name</label>
                      <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Enter Service name*" name="sname" required value="<?php echo $rowi['servicename']?>">
                    </div>
                  </div>
                   <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="inputEmail1">Upload Image</label>
                      <input type="file" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="  *" name="image" required>
                    </div>
                  </div>



                 

                   


                 <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="inputEmail1">Charge Per Service</label>
                      <input type="text" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Enter Amount You Charge For Service *" name="charge" required value="<?php echo $rowi['amt']?>">
                    </div>
                  </div>

                 <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="inputEmail1">Time Taken For Service</label>
                      <input type="text" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Enter Time Taken For Service *" name="time" required value="<?php echo $rowi['timess']?>">
                    </div>
                  </div>

                 
<input type="hidden" name="upp" value="<?php echo $up; ?>">

                  <input type="hidden" name="i" value="<?php echo $id; ?>">
                <input type="hidden" name="j" value="<?php echo date("Y-m-d"); ?>">
                <input type="hidden" name="k" value="<?php echo $row['phone']; ?>">
                <input type="hidden" name="l" value="<?php echo $row['name']; ?>">

                  <div class="col-md-12">
                    <button type="submit" name="update" class="btn btn-a">Update Service</button>
                  </div>
                </div>
              </form>
            </div>



            
          </div>
        </div>
      </div>
    </section>




  <!-- ======= Footer ======= -->



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