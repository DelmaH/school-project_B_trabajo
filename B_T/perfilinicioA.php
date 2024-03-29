<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
  <link rel="stylesheet" type="text/css" href="CSS/stylePI_A.css">
  <link rel="stylesheet"  href="CSS/styleperfil.css">
</head>
<body>
      <div class="contenedor">
            <div class="btn-menu">  
                <label for="btn-menu" class="icon-menu">&#9776</label> 
            </div>
            <div class="logo">
                <div class="name">
                  <h2>Build The Job</h2>
                  <img src="./imagenes/bolsadetrabajo.png" alt="logo de la compañia">
                </div>
            </div> 
      </div>
    <div class="capa"></div>
  <!--	--------------->
      <div class="container">
        <?php
        session_start();

        if (!isset($_SESSION['correo'])) {
          // Si no se ha iniciado sesiSón o no se ha establecido el correo, redirigir al inicio de sesión u otra página de manejo de errores
          header("Location: Login_val/login.php");
          exit;
        }

        $correo = $_SESSION['correo'];

        // Incluir el archivo de conexión
        require_once 'cn.php';

        // Obtener los datos del perfil desde la base de datos
        $sql = "SELECT Nombre, Mail, DNI, Telefono, Domicilio, Fecha_nacimiento, Contraseña FROM alumno WHERE Mail = '$correo'";
        $result = mysqli_query($con, $sql);
        // Mostrar los datos en el perfil
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $nombre = $row['Nombre'];
          $email = $row['Mail'];
          $dni = $row['DNI'];
          $telefono = $row['Telefono'];
          $domicilio = $row['Domicilio'];
          $fecha_nacimiento = $row['Fecha_nacimiento'];
          $contraseña = $row['Contraseña'];
        
        ?>
          
        <div class="container-table">
          <form action="actualizar.php" method="POST" enctype="multipart/form-data">
            <h1>Perfil</h1>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" value="<?php echo $row['Nombre']?>">
            </div>
            <label for="mail">Mail:</label>
            <div class="form-text">
              <?php echo $email . "</p>";?>
            </div>
            <label for="dni">DNI:</label>
            <div class="form-text">
              <?php echo $dni . "</p>";?>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono:</label>
              <input type="bigint" id="telefonos" name="telefonos" value="<?php echo $row['Telefono']?>">
            </div>
            <div class="form-group">
              <label for="direccion">Domicilio:</label>
              <input type="text" id="direccion" name="domicilio" value="<?php echo $row['Domicilio']?>">
            </div>
            <div class="form-group">
              <label for="f_nac">Fecha de nacimiento:</label>
              <input type="date" id="f_naci" name="f_nac" value="<?php echo $row['Fecha_nacimiento']?>">
            </div>
            <div class="form-group">
              <label for="contraseña">Contraseña:</label>
              <input type="password" id="contraseña" name="contraseña" value="<?php echo $row['Contraseña']?>">
            </div>
            <div class="form-12">
                <button type="submit">Guardar Cambios</button>
               <input type="reset">
            </div>
          </form>
        </div>
        <?php
        } else {
        echo "No se encontraron datos de perfil.";
        }
        ?>
      <?php
      // Cerrar la conexión (si es necesario)
      $con->close();
      ?>
    </div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
          <div class="cont-menu">
              <nav>
                      <a href="principal_A.php">Inicio</a>
                      <a href="perfilinicioA.php">Perfil</a>
                      <a href="logout.php"> Cerrar sesion</a>
              </nav>
              <label for="btn-menu">✖️</label>
          </div>
    </div>      
</body>
</html>