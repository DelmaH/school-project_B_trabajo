<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/styleA.css">
   
</head>
<body>
        <header>
          <div class="encabezado">
              <img src="bolsadetrabajo.jpg" alt="logo de la compañia">
              <h2 class="name-company">I'm Oportunity</2>
          </div>
          <nav>
              <a href="./Login_val/login.php" class="nav-link">Iniciar Sesion</a>
              <a href="join.php" class="nav-link">Registrarse</a>
          </nav>
      </header>
    <script>  
        function nextFocus(inputF, inputS) {
            document.getElementById(inputF).addEventListener('keydown', function(event) {
              if (event.keyCode == 13) {
                document.getElementById(inputS).focus();
              }
            });
          }

        </script>
        <form method="POST">
            <h4>Registro</h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre"onkeypress="nextFocus('nombres', 'apellidos')">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido"onkeypress="nextFocus('apellidos', 'dni')">
            <input class="controls" type="number" name="dni" id="dni" placeholder="Ingrese su DNI"onkeypress="nextFocus('dni', 'domicilios')">
            <input class="controls" type="address" name="domicilios" id="domicilios" placeholder="Ingrese su domicilio" onkeypress="nextFocus('domicilios', 'telefonos')">
            <input class="controls" type="number" name="telefonos" id="telefonos" placeholder="Ingrese su numero de telefono" onkeypress="nextFocus('telefonos', 'fechas de nacimiento')">
            <input class="controls" type="date" name="fechasdenacimiento" id="fechas de nacimiento" placeholder="Ingrese su fecha de nacimiento"onkeypress="nextFocus('fechas de nacimiento', 'correos')">
            <input class="controls" type="email" name="correos" id="correos" placeholder="Ingrese su correo"onkeypress="nextFocus('correos', 'contraseñas')">
            <input class="controls" type="password" name="contraseñas" id="contraseñas" placeholder="Ingrese su contrase&ntilde;a">
               <div class="terms">
                    <label><input type="checkbox"> </label>
                    <label for="terms"><a href="#"> Acepto los Terminos y Condiciones</a></label>
               </div>
            <input class="botons" type="submit" name="registro" value="Registrar"> 
            <p><a href="./Login_val/login.php"> &iquest;Ya tienes una cuenta?</a></p>
        </form>
      <?php
        include("insertA.php");
      ?>
      </form>
</body>
</html>


