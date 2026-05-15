

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: wheat">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="firstuserpage.php">Beautician<span class="color-b"></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="firstuserpage.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="firstuserpage1.php">Booked details</a>
          </li>

        

          <li class="nav-item">
            <a class="nav-link" href="firstuserpage2.php">chat</a>
          </li>
        


          <li class="nav-item">
            <a class="nav-link" href="viewpay.php">Payment</a>
          </li> 




          <li class="nav-item">
            <a class="nav-link" href="viewprofile.php">Profile</a>
          </li> 
         
         
          <li class="nav-item">
            <a class="nav-link" href="userlogout.php">user logout</a>
          </li>

         <li  class="nav-item">
          <form>
              <input type="text" name="search" class="form-control" placeholder="Enter Name for search">
          </form>
          </li><!-- 

           <li class="nav-item">
          <select class="form-control">Location


<?php
$mstmt=$admin->ret("SELECT * FROM `location`");
while($arow=$mstmt->fetch(PDO::FETCH_ASSOC)){?>
 <li><?php echo $arow['name']?></li>
<?php } ?>
          </select>
          </li> 
          -->
        </ul>
      </div>
      <!-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
    </div>
  </nav><!-- End Header/Navbar -->