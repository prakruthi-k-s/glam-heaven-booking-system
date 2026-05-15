<?php
define('DIR', '../../');
require_once DIR . 'config.php';

$admin = new Admin();

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $stmt = $admin->cud("UPDATE `booking` SET `b_status`='approved' WHERE b_id='$id'", "update");
    echo "<script>alert('Approved Successfully');window.location='../viewbook.php'</script>";

}
?>