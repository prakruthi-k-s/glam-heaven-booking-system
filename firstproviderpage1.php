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
  <nav style="background-color: white" class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
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
              <h1 class="title-single">View all user booked details</h1>
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

      <th scope="col">Book_id</th>
      <th scope="col">Service Name</th>
      <th scope="col">Service Date and time</th>
      
  

      <th scope="col">user id</th>

      <th scope="col">user phoneno</th>
      <th scope="col">user address</th>
      <th scope="col">booked date</th>
      <th scope="col">booking status</th>
      <th></th>
      <th scope="col">Accept</th>
      <th></th>
      <th scope="col">Recject</th>
    </tr>
  </thead>


  <tbody>


    



      <?php


                           $stmtss=$admin -> ret("SELECT * FROM `servbook` WHERE `bid`='$id'");

                                   while($rowss=$stmtss->fetch(PDO::FETCH_ASSOC))
   
                                   {
                                         ?>
                      <tr class="table-success">
                           <td><?php echo $bb= $rowss['sb_id']; ?></td>
                          <td><?php echo $aa= $rowss['sname']; ?>,<?php echo $mm= $rowss['bid']; ?></td>
             
                          <td><?php echo $rowss['sdate']; ?>,<?php echo $rowss['stime']; ?></td>
                          
                          <td><?php echo $rowss['uid']; ?></td>
                  
                          <td><?php echo $rowss['phone']; ?></td>
                             <td><?php echo $rowss['address']; ?></td>
                             <td><?php echo $rowss['bdate']; ?></td>
                             <td><?php echo $rowss['status']; ?></td>

<td>   
       <?php
            // $d=$_SESSION['email'];
   //$st=$admin -> ret("SELECT * FROM `addbook` WHERE `book_id`='$bb' AND `fp_id`='$aa' AND `status`='accept'");
   $st=$admin -> ret("SELECT * FROM `payment` WHERE `fp_id`='$mm' AND `book_id`='$bb' ");
          
            $numm = $st->rowCount();
            if($numm>0){

              ?>
              
         <td>
            <div class="btn btn-success" disabled=""><b><i></i></b></div>
         </td>


          <?php

        }else{
?>
          <td>
            <a href="usercontroller/viewservbookacc.php?idd=<?= $rowss['sb_id'];?>" class="btn btn-primary" onclick="return confirm('Are you sure want to Accept?')"><b><i>Accept</i></b></a> </td> 

        
            
        <?php    }
         ?>
     </td>









     <td>   
       <?php
            // $d=$_SESSION['email'];
  // $stj=$admin -> ret("SELECT * FROM `addbook` WHERE `book_id`='$bb' AND `fp_id`='$aa' AND `status`='rejected'");
  $stj=$admin -> ret("SELECT * FROM `payment` WHERE `fp_id`='$mm' AND `book_id`='$bb'");
          
            $nummo = $stj->rowCount();
            if($nummo>0){

              ?>
              
         <td>
            <div class="btn btn-danger" disabled=""><b><i></i></b></div>
         </td>


          <?php

        }else{
?>
          <td>
            <a href="usercontroller/viewservbookrej.php?id=<?= $rowss['sb_id'];?>" class="btn btn-warning" onclick="return confirm('Are you sure want to Reject?')"><b><i>Reject</i></b></a> </td> 

        
            
        <?php    }
         ?>
     </td>





                          

                       <tr>
     
    
    
  </tbody>




<?php } ?>
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