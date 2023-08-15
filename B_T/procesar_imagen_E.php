<?php
session_start();
$correo = $_SESSION['correo'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $imagen = $_FILES['proceso'];

  if ($imagen['error'] === UPLOAD_ERR_OK) {
    $conn = new mysqli('localhost', 'root', '', 'b_trabajo');
    if ($conn->connect_error) {
      die('Error en la conexión a la base de datos: ' . $conn->connect_error);
    }

    // Preparar consulta SQL para actualizar la imagen
    $rutaCarpeta = 'imagen_empresa/';
    $rutaArchivo = $rutaCarpeta . $imagen['name'];

    if (move_uploaded_file($imagen['tmp_name'], $rutaArchivo)) {
      $stmt = $conn->prepare("UPDATE empresa SET Imagen = ? WHERE Mail = ?");
      $stmt->bind_param("ss", $rutaArchivo, $correo);

      if ($stmt->execute()) {
        echo "Imagen actualizada correctamente.";
        header("location:principal_E.php")
      } else {
        echo "Error al actualizar la imagen: " . $stmt->error;
      }

      $stmt->close();
    } else {
      echo "Error al mover la imagen a la carpeta.";
    }

    $conn->close();
  }
}
?>