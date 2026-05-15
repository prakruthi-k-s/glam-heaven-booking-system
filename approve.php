<?php
define('DIR', '../../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();



 if(isset($_POST['login']))
{

  
  $b=$_POST['email'];
  $d=$_POST['password'];
  

   $stmt=$admin->ret("SELECT * from `admin` WHERE email='$b' AND password='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['a_id'];
            $_SESSION['a_id']=$id;
             $admin->redirect('../index');
      }else{
          echo"<script>
            alert('you have entered wrong email');
            window.location.href='../adminlogin.php';
          </script>";
        }
   
  }

  ?>


  