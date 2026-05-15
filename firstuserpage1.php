<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["u_id"])) {
       header("location:userlogin.php");
}

$id=$_SESSION['u_id'];


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

<!-- End Property Search Section -->>

  <?php include "header.php" ?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


   <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="assets/img/yyy.jpg"  alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d">My booked details
                        
                      </h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">















            <?php

             $stmtss=$admin -> ret("SELECT * FROM `servbook` WHERE `uid`='$id'");

             while($rowss=$stmtss->fetch(PDO::FETCH_ASSOC))

                    
            {
              ?>
                   
                    <div class="info-agents color-a">
                      <p>
                        <strong>Service Name</strong>
                        <span class="color-text-a"><?php echo $rowss['sname']; ?></span>
                      </p>
                      
                  
                      <p>
                        <strong>Service Date/Service Time </strong>
                        <span class="color-text-a"><?php echo $rowss['sdate']; ?>,<?php echo $rowss['stime']; ?></span>
                      </p>

                      <p>
                        <strong>Booked date</strong>
                        <span class="color-text-a"><?php echo $rowss['bdate']; ?></span>
                      </p>

                    <p>
                        <strong>Beautician Id/Beautician name</strong>
                        <span class="color-text-a"><?php echo $rowss['bid']; ?>,<?php echo $rowss['bname']; ?></span>
                      </p>
                      <p>
                        <strong>Service Charge</strong>
                        <span class="color-text-a"><?php echo $rowss['sprice']; ?></span>
                      </p>

                      <p>
                        <strong>Booking status</strong>
                        <span class="color-text-a" style="color:red;"><?php echo $rowss['status']; ?></span>
                        <input type="hidden" name="" value="<?php echo $bb=$rowss['sb_id']; ?>">
                      </p>


      <?php
            // $d=$_SESSION['email'];
   $st=$admin -> ret("SELECT * FROM `servbook` WHERE `sb_id`='$bb' AND `uid`='$id' AND (`status`='accept' OR `status`='rejected')");
   
          
            $numm = $st->rowCount();
            if($numm>0){

              ?>
              
         <td>
           <!--  <div class="btn btn-success"><b><i>Booked</i></b></div> -->
         </td>


          <?php

        }else{
?>





                       <a href="usercontroller/firstuserpage1.php?id=<?= $rowss['sb_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to cancel?')"><b><i>Cancel Booking</i></b></a>


                     <?php } ?>







      <?php
            // $d=$_SESSION['email'];
      $st=$admin -> ret("SELECT * FROM `servbook` WHERE `sb_id`='$bb' AND `uid`='$id' AND (`status`='waitlist' OR `status`='rejected')");
          
            $numm = $st->rowCount();
            if($numm>0){

              ?>
              
         <td>
            <!-- <div class="btn btn-success" disabled=""><b><i></i></b></div> -->
         </td>


          <?php

        }else{
?>




                       <a href="payment.php?bid=<?= $rowss['sb_id']; ?> & fpid=<?= $rowss['bid']; ?> & aid=<?php echo $rowss['sprice']; ?>" class="btn btn-warning" onclick="return confirm('Are you sure want to pay?')"><b><i>pay</i></b></a>

              

        <?php } ?>               


                    </div>



                   



                  </div>
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>

 <?php } ?>


                </div>
              </div>
            </div>
          </div>
          
        


        </div>
      </div>
    </section>

  <!-- ======= Intro Section ======= -->
  <!-- End #main -->

  <!-- ======= Footer ======= -->


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