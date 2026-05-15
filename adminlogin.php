<?php
define('DIR', '../../');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();

// Create Package
if (isset($_POST['add'])) {
    $cat_id = $_POST['cat_id'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $amt = $_POST['amt'];
    $includes = $_POST['includes']; // Assuming this is a comma-separated string
    $time = $_POST['time'];
    $bea = $_POST['bea'];

    // Handling Image Upload
    $img = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $upload_dir = "uploads/";

    function generateRandomString($length = 10)
    {
        return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0, $length);
    }

    if (!empty($img)) {
        $img_path = $upload_dir . generateRandomString() . basename($img);
        move_uploaded_file($tmp_name, $img_path);

        // $img_path = $upload_dir . basename($img);

    } else {
        $img_path = ""; // If no image is uploaded
    }

    // Insert into database
    $stmt = $admin->cud("INSERT INTO `package` (cat_id,p_name, p_des, p_amount, p_image, p_includes,p_beautician,p_timings) VALUES ('$cat_id','$name', '$des', '$amt', '$img_path', '$includes','$bea','$time')", "saved");

    echo "<script>alert('Package Added Successfully');window.location='../viewpackage.php'</script>";
}


// Delete Package
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete package from database
    $stmt = $admin->cud("DELETE FROM `package` WHERE pack_id='$id'", "deleted");
    echo "<script>alert('Deleted Successfully');window.location='../viewpackage.php'</script>";
}



// Update Package
if (isset($_POST['edit'])) {
    $id = $_POST['pack_id'];
    $cat_id = $_POST['cat_id'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $amt = $_POST['amt'];
    $includes = $_POST['includes'];
    $time = $_POST['time'];
    $bea = $_POST['bea'];


    // Check if a new image is uploaded
    if (!empty($_FILES['img']['name'])) {
        // Upload new image
        $img = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $upload_dir = "uploads/";

        $img_path = $upload_dir . basename($img);
        move_uploaded_file($tmp_name, $img_path);

        // Update database with new image
        $stmt = $admin->cud("UPDATE `package` SET p_name='$name',cat_id='$cat_id', p_des='$des', p_amount='$amt', p_image='$img_path', p_includes='$includes',p_timings='$time',p_beautician='$bea' WHERE pack_id='$id'", "updated");
    } else {
        // Update without changing image
        $stmt = $admin->cud("UPDATE `package` SET p_name='$name', p_des='$des', p_amount='$amt', p_includes='$includes',p_timings='$time',p_beautician='$bea' WHERE pack_id='$id'", "updated");
    }

    echo "<script>alert('Package Updated Successfully');window.location='../viewpackage.php'</script>";
}
?>