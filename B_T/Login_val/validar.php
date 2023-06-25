<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

include('../cn.php');

$consult_empresa = "SELECT*FROM empresa where Mail='$correo' AND Contraseña='$contraseña'";
$result_empresa = mysqli_query($con, $consult_empresa);
$filas_empresa = mysqli_num_rows($result_empresa);

$consult_alumno = "SELECT*FROM alumno where Mail='$correo' AND contraseña='$contraseña'";
$result_alumno = mysqli_query($con, $consult_alumno);
$filas_alumno = mysqli_num_rows($result_alumno);

if($filas_empresa) {
    header("Location:../principal_E.php");
} elseif($filas_alumno) {
    header("Location:../principal_A.php");
} else {
    include("login.php");
    ?>
    <h2 class="bad">Error en la autenticacion</h2>
    <?php
}
mysqli_free_result($result_empresa);
mysqli_free_result($result_alumno);
mysqli_close($con);
?>