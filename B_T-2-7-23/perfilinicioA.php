<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
  <link rel="stylesheet" type="text/css" href="CSS/stylePI_A.css">
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
      <h2> Perfil </h2>
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
      $sql = "SELECT Nombre, Mail, Telefono FROM alumno WHERE Mail = '$correo'";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['Nombre'];
        $email = $row['Mail'];
        $telefono = $row['Telefono'];

        // Mostrar los datos en el perfil
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
      } else {
        echo "No se encontraron datos de perfil.";
      }

      // Cerrar la conexión (si es necesario)
      $con->close();
      ?>
      <p><a href="perfilA.php">Editar Perfil</a></p>
    </div>
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