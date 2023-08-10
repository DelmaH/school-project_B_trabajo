<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/stylePI_E.css">
  <link rel="stylesheet" href="CSS/styleperfil_E.css">

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

            $sql = "SELECT Nombre, Domicilio, Mail, Tel, Contraseña, Foto FROM empresa WHERE Mail = '$correo'";
            $result = mysqli_query($con, $sql);
            // Mostrar los datos en el perfil
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $nombre = $row['Nombre'];
              $email = $row['Mail'];
              $telefono = $row['Tel'];
              $domicilio = $row['Domicilio'];
              $contraseña = $row['Contraseña'];
              $imag = $row['Foto'];
            ?>
              
            <div class="container-table">
              <form class="cont_perfil" action="actualizar_E.php" method="POST" enctype="multipart/form-data">
                <h1>Perfil</h1>
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" value="<?php echo $row['Nombre']?>">
                </div>
                <label for="mail">Mail:</label>
                <div class="form-text">
                  <?php echo $email . "</p>";?>
                </div>
                <div class="form-group">
                  <label for="tel">Teléfono:</label>
                  <input type="bigint" id="telefono" name="telefono" value="<?php echo $row['Tel']?>">
                </div>
                <div class="form-group">
                  <label for="direccion">Domicilio:</label>
                  <input type="text" id="direccion" name="domicilio" value="<?php echo $row['Domicilio']?>">
                </div>
                <div class="form-group">
                  <label for="contraseña">Contraseña:</label>
                  <input type="password" id="contraseña" name="contraseña" value="<?php echo $row['Contraseña']?>">
                </div>
                <div class="form-12">
                    <button class="botom" type="submit">Guardar Cambios</button>
                  <input type="reset">
                </div>
              </form>
            </div>
            <div class="card">
              <form class="perfil" action="insert_imagen.php" method="POST" enctype="multipart/form-data">
                  <div class="profile">
                    <div class="user-img">
                      <img src="<?php  echo $row['Foto'] ?>" alt="foto de perfil">
                    </div>
                    <div class="content">
                      <?php echo $nombre ;?>
                    </div>
                  </div>
                  <div class="card-user">
                    <div class="image_actions">
                      <input type="file" id="imagen" name="imagen" accept="image/*" > 
                      <label for="imagen"> Usar nueva imagen </label>
                    </div>
                    <div class="elim_user">
                      <label for="del_image"> Eliminar foto actual <input type="checkbox" id="del_image" name="foto_eliminar"/></label>
                    </div>
                  </div>
                  <div class="form-button">
                    <button class="botom1" type="submit">Guardar</button>
                  </div>
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
  <!--	--------------->
      <input type="checkbox" id="btn-menu">
      <div class="container-menu">
            <div class="cont-menu">
                <nav>
                      <a href="principal_E.php">Inicio</a>
                      <a href="#">Postulaciones</a>
                      <a href="perfilinicioE.php">Perfil</a>
                      <a href="logout.php"> Cerrar sesion</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
      </div>     
</body>
</html>