<?php
$telefono = $_POST['telefono'];
$mail = $_POST['correo'];
$direccion = $_POST['direccion'];
session_start();
$correo= $_SESSION['correo'];

// Establecer la conexión con la base de datos
$conn = new mysqli('localhost', 'root', '', 'b_trabajo');

// Verificar la conexión
if ($conn->connect_error) {
  die('Error en la conexión: ' . $conn->connect_error);
}

// Preparar la consulta SQL utilizando sentencias preparadas
$stmt = $conn->prepare("UPDATE empresa SET Domicilio = ?, Mail = ?, Tel = ? WHERE Mail= ?" );

// Vincular los parámetros
$stmt->bind_param("ssss", $direccion, $mail, $telefono, $correo);

// Ejecutar la consulta
if ($stmt->execute()) {
  echo "Los cambios se han guardado exitosamente";
  header('Location: perfilinicioE.php');
} else {
  echo "Error al guardar los cambios: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();

?>