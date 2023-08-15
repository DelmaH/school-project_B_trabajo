
<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <meta htt-equiv="X-UA-Compatible" contect="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/styleP.css">
    <title>B_Trabajo</title>
    <script src="principaldeop_E.js"></script>
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
             <?php
              session_start();

              if (!isset($_SESSION['correo'])) {
                // Si no se ha iniciado sesiSón o no se ha establecido el correo, redirigir al inicio de sesión u otra página de manejo de errores
                header("Location: empresa.php");
                exit;
              }

              $correo = $_SESSION['correo'];

              // Incluir el archivo de conexión
              require_once 'cn.php';
              ?>
      <div class="text">
        <h2> HOLA BIENVENIDO <?php echo $_SESSION['correo'] ?> </h2>
      </div>
      <?php 
      // Incluir el archivo de conexión
      require_once 'cn.php';
      $sql = "SELECT Nombre, Foto, Imagen FROM empresa WHERE Mail = '$correo'";
              $result = mysqli_query($con, $sql);
              // Mostrar los datos en el perfil
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nombre = $row['Nombre'];
                $imag = $row['Foto'];
                $imag_emp= $row['Imagen'];
              }
                ?>
      <div class="card">
         <form class="perfil" action="insert_imagen.php" method="POST" enctype="multipart/form-data">
            <div class="profile">
                <div class="user-img">
                    <img class="imgperfil" src="<?php  echo $row['Foto'] ?>" alt="foto de perfil">
                </div>
                <div class="content">
                   <?php echo $nombre ;?>
                </div>
            </div>
         </form>
      </div>
      <div class="option">
            <button class="button1" onclick="mostrarOcultarDiv('div1')">Descripcion</button>
            <button class="button2" onclick="mostrarOcultarDiv('div2')">Empleos</button>
            <button class="button3" onclick="mostrarOcultarDiv('div3')">Contacto</button>

        <div id="div1" class="elemento">
            <form class="descrip" action="procesar_imagen_E.php" method="POST" enctype="multipart/form-data">
                <div class="imagen_empresa">
                    <div class="descripc">
                        Esta empresa sueña con empleados que les apasione su trabajo y quieran crecer de forma individual y colectiva
                    </div>
                    <img id="imagendeempresa"src="<?php  echo $row['Imagen'] ?>" alt="Imagen de empresa">
                </div>
                <div class="I-E">
                    <div class="entrada_imag">
                      <input type="file" id="proceso" name="proceso" accept="image/*" > 
                      <label for="proceso"> Imagen </label>
                    </div>
                    <div class="form-button">
                        <button class="botom1" type="submit">Guardar</button>
                    </div>
                </div>
            </form> 
        </div>
        <div id="div2" class="elemento">
          <div id="Descripcion" class="divs">
            Hola
          </div>
        </div>
        <div id="div3" class="elemento">
          <div id="Descripcion" class="divs">
            Hola 2
          </div>
        </div>
      </div>
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