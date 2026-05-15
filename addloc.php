 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['add']))
{

  
  

  $a=$_POST['type'];
  $b=$_POST['amt'];
  $c=$_POST['name'];
  $targetDir = "photo/upload/";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);


 $stmt=$admin -> cud("INSERT INTO `package` (pname,amount,category,image) VALUES ('$c','$b','$a','$image')","saved");

 echo "<script>alert('Package Added Successfully');window.location='../viewinterior.php';</script>";
 }

//delete

 if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `package` WHERE pack_id='$id'","deleted");
   echo "<script>alert('Package Deleted Successfully');window.location='../viewinterior.php';</script>";
}


//update

if(isset($_POST['update']))
{

  
  
$pack_id=$_POST['pack_id'];
 $a=$_POST['type'];
  $b=$_POST['amt'];
  $c=$_POST['name'];

$stmt=$admin -> cud("UPDATE `package` SET `pname`='$c',`category`='$a',`amount`='$b' WHERE `pack_id`='$pack_id'","updated");

   echo "<script>alert('Package Updated Successfully');window.location='../viewinterior.php';</script>";

 }

?>