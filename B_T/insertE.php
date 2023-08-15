<?php
include("cn.php");


if(isset($_POST["registro"])){
    if(strlen($_POST['name'])>= 1 &&  strlen($_POST['domic'])>= 1 && strlen($_POST['correo'])>= 1 && strlen($_POST['tel'])>= 1 && strlen($_POST['contraseña'])>= 1) {
        $name= trim($_POST['name']);
        $domic= trim($_POST['domic']);
        $correo= trim($_POST['correo']);
        $tel= $_POST['tel'];
        $contraseña= trim($_POST['contraseña']);
        $consulta= "INSERT INTO empresa(Nombre, Domicilio, Mail, Tel, Contraseña) VALUES ('$name','$domic','$correo','$tel','$contraseña')";
        $resultado= mysqli_query($con, $consulta);
        if($resultado){
            ?>
            <h3 class= "ok"> Te registraste correctamente </h3>
            <?php
            $correo=$_POST['correo'];
            session_start();
            $_SESSION['correo']=$correo;
            if($resultado == $correo){
                header('Location:principal_E.php');
            }
            elseif($correo == null || $correo == '') {
              echo 'usted no tiene autorizacion';
              die();
            }
        } else{
            ?>
            <h3 class= "bad"> Ocurrio un error </h3>
            <?php
        }


   }  else{
    ?>
    <h3 class= "bad"> Por favor complete los campos </h3>
    <?php
    }


}


?>
