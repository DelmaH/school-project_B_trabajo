<html leng="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <meta htt-equiv="X-UA-Compatible" contect="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/styleE.css">
    <title>B_Trabajo</title>
</head>
<body>
  <header>
          <div class="encabezado">
              <img src="bolsadetrabajo.png" alt="logo de la compañia">
              <h2 class="name-company">Build The Job</2>
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
          document.addEventListener("DOMContentLoaded", () => {
            const form = document.querySelector("form");
            form.addEventListener("keydown", event => {
              if (event.key === "Enter") {
                event.preventDefault();
              }
            });
          });
        </script>
        <form method="POST"> 
          <h4>Registro</h4>
          <input class="control" id= 'full-name'name="name" type="text" placeholder="Ingrese su nombre" onkeypress="nextFocus('full-name', 'domic')"/>
          <input class="control" id= 'domic'name="domic" type="text" placeholder="Ingrese su domicilio" onkeypress="nextFocus('domic', 'correo')"/>
          <input class="control" id= 'correo'name="correo" type="email" placeholder="Ingrese su correo"onkeypress="nextFocus('correo', 'tel')"/>
          <input class="control" id= 'tel'name="tel" type="number" placeholder=" Ingrese su Telefono"onkeypress="nextFocus('tel', 'contraseña')"/>
          <input class="control" id= 'contraseña'name="contraseña" type="password" placeholder=" Ingrese su Contrase&ntilde;a" />
             <div class="terms">
               <label><input type="checkbox"> </label>
               <label for="terms"><a href="#"> Acepto los Terminos y Condiciones</a></label>
             </div>
          <input class="botom" type="submit" name="registro" value="Registrar">
          <p><a href="./Login_val/login.php"> &iquest;Ya tienes una cuenta?</a></p>
        </form>
      <?php
          include("insertE.php");
      ?>
</body>
</html>