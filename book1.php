<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["u_id"])) {
       header("location:userlogin.php");
}

$id=$_GET['id'];

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


  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Beautician</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
           <!--    <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword"> -->

           <input type="text" name="search" class="form-control" placeholder="Enter Name for search" onkeyup="searchit(this.value)">
            </div>
          </div>
          
        
       
      
          <!-- <div class="col-md-12">
            <button type="submit" class="btn btn-b" onkeyup="searchit(this.value)">Search Property</button>
          </div> -->
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->
  

  <?php include "header.php" ?>

  <!-- ======= Intro Section ======= -->
  <video autoplay muted loop id="myVideo">

  <source src="assets/img/1.mp4" alt="dd" type="video/mp4">
</video> 
  <main id="main">

    <!-- ======= Services Section ======= -->
    
    <!-- ======= Latest Properties Section ======= -->
  
    <!-- ======= Agents Section ======= -->

    <!-- ======= Testimonials Section ======= -->
   
    <!-- ======= Latest News Section ======= -->
     <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Services</h2>
              </div>
              <div class="title-link">
                <a href="viewgallery.php?id=<?php echo $id ?>" class="btn btn-secondary" style="color:white">View Gallery
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div id="new-carousel" class="owl-carousel owl-theme">


    
            <?php

             $stmtsp=$admin -> ret("SELECT * FROM `addserv` where `fp_id`=".$id);

             while($rowsz=$stmtsp->fetch(PDO::FETCH_ASSOC))

                    
            {
              ?>






          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="upload/<?php echo $rowsz['image']; ?>" height="500px" width="300px" alt="" class="">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="" style="color:white">Service: <?php echo $rowsz['servicename']; ?>
                        
                    </h2>

                  </div>


                  

                 
                   

                  <div class="card-date">
                    <span class="date-b" style="color:white">Beautician Name: <?php echo $rowsz['oname']; ?></span>
                  </div>

                   <div class="card-date">
                    <span class="date-b" style="color:white">Charge:
                        <?php echo $rowsz['amt']; ?></span><br>
                        <p style="color:white">Time Taken:<?php echo $rowsz['timess']; ?></span><br>
                  </div>
                  <div class="card-title-b">
                               <a href="review.php?rev=<?php echo $rowsz['flat_id']; ?>" class="btn btn-warning">Reviews</a>
                               <br>
                               <br>
                                <p><a href="rate.php?rate=<?php echo $rowsz['flat_id']; ?>" class="btn btn-primary" style="font-size: 10px">Rate This</a></p>

                              <h2 class="title-2">

           
           <a href="book.php?& pr=<?php echo $rowsz['image'];?> & aa=<?php echo $rowsz['servicename'];?> & bb=<?php echo $rowsz['oname'];?> & bdat= <?php echo date("Y-m-d");?> & cc=<?php echo $rowsz['amt'];?> & ff=<?php echo $rowsz['fp_id']?>"  onclick="return confirm('Are you sure want to Book?')" class="btn btn-primary">Book Now</a>

             </h2>
             </div>

  
               







                  


                </div>
              </div>
            </div>
          </div>
          <?php  } ?>
           








        </div>
      </div>
    </section><!-- End Latest News Section -->

                
                


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <?php include "footer.php" ?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>



  <script type="text/javascript">
        function searchit(alm)
        {
            
         
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new-carouse").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getresult.php?q=" + alm, true);
            xmlhttp.send();
  
        }
   </script>  

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