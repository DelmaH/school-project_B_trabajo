<?php

include("cn.php");

if(isset($_POST["registro"])){
    if(strlen($_POST['nombres'])>= 1 &&  strlen($_POST['apellidos'])>= 1 && strlen($_POST['dni'])>= 1 && strlen($_POST['domicilios'])>= 1 && strlen($_POST['telefonos'])>= 1 && strlen($_POST['fechasdenacimiento'])>= 1 && strlen($_POST['correos'])>= 1 && strlen($_POST['contraseñas'])>= 1) {
        $nombres= trim($_POST['nombres']);
        $apellidos= trim($_POST['apellidos']);
        $dni= trim($_POST['dni']);
        $domicilios= trim($_POST['domicilios']);
        $telefonos= trim($_POST['telefonos']);
        $fechasdenacimiento= date("d/m/y");
        $correos= trim($_POST['correos']);
        $contraseñas= trim($_POST['contraseñas']);
        $consulta= "INSERT INTO alumno(Nombre, Apellido, DNI, Domicilio, Mail, Telefono, Fecha_nacimiento, contraseña) VALUES ('$nombres','$apellidos','$dni','$domicilios','$correos','$telefonos','$fechasdenacimiento','$contraseñas')";
        $resultado= mysqli_query($con, $consulta);
        if($resultado){
            ?>
            <h3 class= "ok"> Te registraste correctamente </h3>
            <?php
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
