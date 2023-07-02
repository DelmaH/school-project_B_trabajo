<?php
session_start();
$correo= $_SESSION['correo'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>Editar Perfil</title>
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
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
          <div class="cont-menu">
                <nav>
                        <a href="Principal_E.php">Inicio</a>
                        <a href="#">Postulaciones</a>
                        <a href="perfilinicioE.php">Perfil</a>
                        <a href="logout.php"> Cerrar sesion</a>

                </nav>
                <label for="btn-menu">✖️</label>
    </div>
    <script>  
      function nextFocus(inputF, inputS) {
          document.getElementById(inputF).addEventListener('keydown', function(event) {
            if (event.keyCode == 13) {
              document.getElementById(inputS).focus();
            }
          });
        }
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.querySelector("form");
            form.addEventListener("keydown", event => {
              if (event.key === "Enter") {
                event.preventDefault();
              }
            });
          });
        </script>
  <div class="container">
    <form action="actualizar_E.php" method="POST" enctype="multipart/form-data">
        <h1>Editar Perfil</h1>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">
        <label for="correo">Correo:</label>
        <input type="email" id="mail" name="mail">
        <label for="domicilio">Domicilio:</label>
        <input type="text" id="direccion" name="direccion">
        <button type="submit">Guardar Cambios</button>
    </form>  
</div>
</body>
</html>