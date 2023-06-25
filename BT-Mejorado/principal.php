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
        <div class="contenedor">
            <div class="btn-menu">  
                <label for="btn-menu" class="icon-menu">&#9776</label> 
            </div>
            <div class="logo">
                <div class="name">
                  <h2>I'm Oportunity</h2>
                  <img src="./imagenes/bolsadetrabajo.jpg" alt="logo de la compañia">
                </div>
            </div> 
        </div>
        <div class="capa"></div>
  <!--	--------------->
    <div class="text">
      <h2> HOLA BIENVENIDO <?php echo $_SESSION['correo'] ?> </h2>
      <p> kfihfiehfiehfiohfihdifhdifhdifhidfdfdfdfdfd </p><br>
      <p>fepofjoepjfojfopjdopfjdo</p>
    </div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
          <div class="cont-menu">
              <nav>
                      <a href="#">Empleos</a>
                      <a href="#">Postulaciones</a>
                      <a href="#">Perfil</a>
                      <a href="logout.php"> Cerrar sesion</a>
              </nav>
              <label for="btn-menu">✖️</label>
          </div>
    </div>      
</body>
</html>