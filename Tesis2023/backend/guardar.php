<?php
// Archivo guardar.php

// Incluir archivo de conexión a la base de datos
require 'conexion.php';

// // Obtener los datos enviados por el formulario
// $nombre = $_POST['nombre'];
// $email = $_POST['email'];
// $telefono = $_POST['telefono'];

// // Realizar la consulta para insertar o actualizar la información en la base de datos
// $query = "INSERT INTO tabla_usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono') ON DUPLICATE KEY UPDATE nombre='$nombre', telefono='$telefono'";
// $resultado = mysqli_query($conexion, $query);

// // Verificar si la consulta se ejecutó correctamente
// if ($resultado) {
//   echo "Información guardada correctamente.";
// } else {
//   echo "Error al guardar la información: " . mysqli_error($conexion);
// }

// // Cerrar la conexión a la base de datos
// mysqli_close($conexion);
// ?>
