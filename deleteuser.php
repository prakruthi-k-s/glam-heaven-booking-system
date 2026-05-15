 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();



$id = $_GET['id'];
$a = 'accept';






$stmt=$admin -> cud("UPDATE `addint` SET `status`='$a' WHERE `int_id`='$id'","updated");

	
	  echo"<script>
            alert('you have now approved the booking');
            window.location.href='../vieworder.php';
          </script>";





?>