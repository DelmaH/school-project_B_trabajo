<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];
$contraseña = $_POST['contraseña'];

session_start();
$correo= $_SESSION['correo'];

// Establecer la conexión con la base de datos
$conn = new mysqli('localhost', 'root', '', 'b_trabajo');

// Verificar la conexión
if ($conn->connect_error) {
  die('Error en la conexión: ' . $conn->connect_error);
}

$str_contraseña = empty($contraseña) ? '' : " contraseña =('$contraseña') , ";

// Preparar la consulta SQL utilizando sentencias preparadas
$stmt = $conn->prepare("UPDATE empresa SET Nombre = ?, Tel = ?, Domicilio = ?, $str_contraseña Contraseña = ? WHERE Mail = ?" );

// Vincular los parámetros
$stmt->bind_param("sssss", $nombre, $telefono, $domicilio, $contraseña, $correo);

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