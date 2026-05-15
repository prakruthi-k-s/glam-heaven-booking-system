<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["fp_id"])) {
       header("location:providerlogin.php");
}

$id=$_SESSION['fp_id'];


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

<body style="background-color: wheat">

 
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
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
            <a class="nav-link" href="firstproviderpage1.php">View Bookings</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="firstproviderpage2.php">chat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="firstproviderpage3.php">payment</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="providerlogout.php">logout</a>
          </li>
          
          
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <!-- End Intro Section -->
<!-- End #main -->




<!-- ======= About Section ======= -->
   <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">View all uploaded service</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Back
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>


 <table class="table table-striped">
  <thead>
    <tr>
      

       <th></th>
      <th scope="col">Service name</th>
      <th scope="col">Amount</th>
      <th scope="col">Time Taken </th>
      
     
     
      <th scope="col">post date</th>
      <th scope="col">phone number</th>
     
      <th scope="col">Edit</th>
    
      <th scope="col">Delete</th>
    </tr>
  </thead>


  <tbody>


    



      <?php


                           $stmtss=$admin -> ret("SELECT * FROM `addserv` WHERE `fp_id`='$id'");

                                   while($rowss=$stmtss->fetch(PDO::FETCH_ASSOC))
   
                                   {
                                         ?>
                      <tr class="table-success">
                           <td><img src="usercontroller/<?php echo $rowss['image']; ?>" height="100" width="100">
                           <td><?php echo $rowss['servicename']; ?></td>
                          <td><?php echo $rowss['amt']; ?></td>
                          <td><?php echo $rowss['timess']; ?></td>
                          
                      
                       
                             <td><?php echo $rowss['pdate']; ?></td>
                              <td><?php echo $rowss['phone']; ?></td>
<td>
                              
            <a href="firstproviderpage0update.php?up=<?= $rowss['flat_id'];?>" class="btn btn-warning" onclick="return confirm('Are you sure want to Edit?')"><b><i>Edit</i></b></a> </td> 



<td>
            <a href="usercontroller/addserv.php?idd=<?= $rowss['flat_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure want to Deletet?')"><b><i>Delete</i></b></a> </td> 

</tr>
            
        <?php    }
         ?>
  
                  
     
    
    
  </tbody>




</table>





   




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