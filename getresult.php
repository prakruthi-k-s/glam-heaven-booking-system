<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();


$searchq = $_GET['q'];
//select values from empInfo table
$data="SELECT * FROM addserv where location like '".$searchq."%'" ;
 
$val=$admin->ret($data);    


    while($row = $val->fetch(PDO::FETCH_ASSOC))
    {
    ?>

    <h1><img src="upload/<?php echo $row['image']; ?>" height="400px"></h1>
    <h3><?php echo $row['flatname']; ?></h3>
    <h3><?php echo $row['location']; ?></h3>
    <h5 style="color:blue"><?php echo $row['rentfees']; ?>rs</h5>
    
       <h5 style="color:blue">Area:<?php echo $row['area']; ?>rs</h5>

       
       <h5 style="color:blue">Room:<?php echo $row['room']; ?>rs</h5>

      
       <h5 style="color:blue">Parking:<?php echo $row['parking']; ?>rs</h5>

       <br>
  
  <a href="firstuserpage.php#property-carousel" class="btn btn-primary">view more</a>


  
<?php   
}

 ?>

