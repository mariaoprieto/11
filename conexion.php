<?php
$conexion = null;
$servidor = 'localhost'; // Servidor Local
$bd='registro'; // Base de datos
$user = 'root'; // Usuario de MySQL
$pass = ''; // Contraseña de MySQL

$conexion = mysqli_connect($servidor, $user, $pass, $bd);

//* Comprobación de la conexión
if ($conexion === false) {
    echo "Error de conexion!";
    exit;
}

//* Devolución de la conexión
return $conexion;
?>
