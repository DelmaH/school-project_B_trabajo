<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <meta htt-equiv="X-UA-Compatible" contect="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/styleS.css">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="encabezado">
            <img src="bolsadetrabajo.jpg" alt="logo de la compañia">
            <h2 class="name-company">I'm Oportunity</2>
        </div>
        <nav>
            <a href="login.php" class="nav-link">Iniciar Sesion</a>
            <a href="../join.php" class="nav-link">Registrar</a>
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
    <form action="validar.php" class="sesion" method= "POST">
        <h4> Iniciar sesion</h4>
        <input class="iniciar" id='correo'name="correo" type="email" placeholder="Ingrese su mail"  onkeypress="nextFocus('correo', 'contraseña')"/>
        <input class="iniciar" id='contraseña'name="contraseña" type="password" placeholder=" Ingrese su Contraseña" />
        <label><p><input type="checkbox" id="box" value=""><a href="#"> Estoy de acuerdo con Terminos y Condiciones </a></p><label>
        <br><input class="botom" type="submit" value= Iniciar></input></br>
        <p><a href="../join.php">¿No tienes una cuenta? </a></p>
    </form>   
</body>
</html>