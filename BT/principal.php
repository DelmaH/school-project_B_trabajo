<?php
  session_start();
  $correo= $_SESSION['correo'];
  if($correo == null || $correo == '') {
    echo 'usted no tiene autorizacion';
    die();
  }
?>
<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <meta htt-equiv="X-UA-Compatible" contect="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/styleP.css">
    <title>B_Trabajo</title>
</head>
<body>
      <header>
        <div class="encabezado">
          <img src="bolsadetrabajo.jpg" alt="logo de la compañia">
          <h2 class="name-company">I'm Oportunity</2>
          </div>
          <nav>
            <a href="" class="nav-link">Empleos</a>
            <a href="" class="nav-link">Postulacones</a>
            <a href="logout.php" class="nav-link">Cerrar Sesion</a>
          </nav>
      </header>
      <div>
        <h2> HOLA BIENVENIDO <?php echo $_SESSION['correo'] ?> </h2>
        
      
</body>
</html>