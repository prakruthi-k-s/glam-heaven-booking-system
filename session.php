<?php
if (isset($_SESSION['u_id'])) {
    $uid = $_SESSION['u_id'];
} else {
    header('location:userlogin.php');
} ?>