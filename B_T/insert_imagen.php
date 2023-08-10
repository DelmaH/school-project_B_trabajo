<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $imagen = $_FILES['imagen'];

  // Verificar si se ha seleccionado una imagen
  if ($imagen['error'] === UPLOAD_ERR_OK) {
    $conn = new mysqli('localhost', 'root', '', 'b_trabajo');
    if ($conn->connect_error) {
        die('Error en la conexión a la base de datos: ' . $conn->connect_error);
      }
    
    // Preparar la consulta SQL
    $nombreArchivo = $imagen['name'];
    $tipoArchivo = $imagen['type'];
    $tamanioArchivo = $imagen['size'];
    $datosArchivo = file_get_contents($imagen['tmp_name']);
    $rutaCarpeta = 'perfil_fotos/';
    $rutaArchivo = $rutaCarpeta . $nombreArchivo;
    session_start();
    $correo= $_SESSION['correo'];
    
    if ($size > 3*1024*1024){
      echo "Error, el tamaño maximo permitido es 3MB";
    }

    $stmt = $conn->prepare("UPDATE empresa SET Foto = ? WHERE Mail = ?" );

    // Vincular los parámetros
    $stmt->bind_param("ss", $rutaArchivo, $correo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
    echo "Imagen guardada correctamente en la base de datos.";
    } else {
    echo "Error al guardar la imagen en la base de datos: " . $stmt->error;
    }
  
    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
    }

    // Mover la imagen a la ubicación deseada 
    if (move_uploaded_file($imagen['tmp_name'], $rutaArchivo)) {
      header('Location: perfilinicioE.php');
      echo $rutaArchivo;
     } else {
        echo "Error al guardar la imagen en la carpeta.";
      }
    }
      // Mostrar la imagen en el perfil
?>