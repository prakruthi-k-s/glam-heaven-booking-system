<?php
define('DIR', '../../');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();


//create
if (isset($_POST['add'])) {




  $a = $_POST['cat'];
  $d = $_POST['des'];


  $stmt = $admin->cud("INSERT INTO `category` (cat_name,cat_des) VALUES ('$a','$d')", "saved");

  echo "<script>alert('Category Added Successfully');window.location='../viewcat.php'</script>";
}

//delete

if (isset($_GET['id'])) {

  $id = $_GET['id'];
  $stmt = $admin->cud("DELETE FROM `category` WHERE cat_id='$id'", "deleted");
  echo "<script>alert('Deleted Successfully');window.location='../viewcat.php'</script>";

}


//update
if (isset($_POST['edit'])) {
  $id = $_POST['cat_id']; // Assuming you're passing category ID
  $a = $_POST['cat'];
  $d = $_POST['des'];

  $stmt = $admin->cud("UPDATE `category` SET cat_name='$a', cat_des='$d' WHERE cat_id='$id'", "updated");

  echo "<script>alert('Category Updated Successfully');window.location='../viewcat.php'</script>";
}
