<?php
    require 'cn.php'

    $imag = '';

    if(isset($_FILES["imag"])){
        $file=$_FILES['imag'];
        $nombre = $file['name'];
        $tipo = $file['type'];
        $ruta_provisional = $file['tmp_name'];
        $size = $file['size'];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];
        $carpeta = 'perfil_fotos/';
      if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
         echo "Error el archivo no es una imagen";
      }
       else if ($size > 3*1024*1024){
            echo "Error, el tamaño maximo permitido es 3MB";
        }
      else{
            $src = $carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);
            $foto="perfil_fotos/".$nombre;
      }

    }
        $query=mysqli_query($con, "INSERT INTO empresa (Foto) VALUES ('$img')");
        header('location: perfilinicioE.php');
?>