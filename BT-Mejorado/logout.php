<?php 
include('cn.php');

session_start();

if(isset($_SESSION['correo'])){
    session_destroy();
    header('Location:'.$URL.'Login_val/login.php');
 }else{
    echo "no existe sesion";
  }
?>