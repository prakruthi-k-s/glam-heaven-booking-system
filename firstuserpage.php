<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["u_id"])) {
       header("location:userlogin.php");
}



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

<!-- <body style="background-color: wheat"> -->

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
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">About Us</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
          
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="loginpage1/images/flat-bg.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      beautician is a webpage where you can find multiple beauticians with different services based on city with affordable price.
                    </p>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    <!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
      <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Beauticians</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.html">book now
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div id="new-carousel" class="owl-carousel owl-theme">


    
            <?php
            if(isset($_GET['search'])){
                $stmtsa=$admin -> ret("SELECT * FROM addserv where location like '".$searchq."%'");

            }else{

            $stmtsa=$admin -> ret("SELECT * FROM `location`");
            }

             while($rowsa=$stmtsa->fetch(PDO::FETCH_ASSOC)):
              $d_arr[$rowsa['l_id']]=$rowsa['name'];

             endwhile;

             $stmtsp=$admin -> ret("SELECT * FROM `beautician`");

             while($rowsz=$stmtsp->fetch(PDO::FETCH_ASSOC))

               


                    
            {
              ?>






          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="upload/<?php echo $rowsz['image']; ?>" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="" style="color:white">Beautician: <?php echo $rowsz['name']; ?>
                        
                    </h2>

                  </div>


                  

                 
                   

                  <div class="card-date">
                    <span class="date-b" style="color:white">Location <?php echo $d_arr[$rowsz['location']]; ?></span>
                  </div>

                     <a href="book1.php?id=<?php echo $rowsz['fp_id']?>" class="btn btn-primary">View</a>

  
               







                  


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
        function searchitas(alm)
        {
            
         
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
               var A =  document.getElementById("new-carouse").innerHTML = this.responseText;
                alert(A);
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