 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['add']))
{

  
  

  $a=$_POST['loc'];
  

 $stmt=$admin -> cud("INSERT INTO `location` (name) VALUES ('$a')","saved");

echo "<script>alert('Location Added Successfully');window.location='../viewloc.php'</script>";
 }

//delete

 if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `location` WHERE l_id='$id'","deleted");
  echo "<script>alert('Deleted Successfully');window.location='../viewloc.php'</script>";

}


//update
