<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicia sesion!</title>
    <link rel="stylesheet" href="inicar sesion.css">
    <link rel="icon" href="cosas/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body> 

//*BARRA DE NAVEGACION.

<header class="header">
    <nav>
        <ul class="nav-links">
            <li><a href="#">Idioma</a></li>
            <li><a href="https://iedjorgeisaacs.edu.co/" target="_blank">Pagina Oficial</a></li>
            <li><a href="#">Fotos</a></li>
        </ul>
    </nav>
</header>

//*BARRA DE NAVEGACION.


//*VIDEO DEL FONDO.

    <video muted autoplay loop>
        <source src="./cosas/video.mp4"
        type="video/mp4">
        <div class="video"></div>
    </video>

//*VIDEO DEL FONDO.


//*CUADRO DE INICIO DE SESION.

    <div class="formulario">
       <h1>INICIAR SESION</h1>
       <form method="post" action="insertar.php">
         <div class="username">
            <input type= "text" required name="name">
            <label>NOMBRE</label>
        </div>
         <div class="contraseña">
            <input type= "password" required>
            <label>CONTRASEÑA</label>
         </div>
         <input type="submit" value="Entrar" name="register">
    </div>

//*CUADRO DE INICIO DE SESION.

//!CONEXION CON PHP.
 <?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['contraseña']) >= 1) {
        $name = trim($_POST['name']);
        $contraseña = trim($_POST['contraseña']);
        $fecha_reg = date("d/m/y");
        $consulta = "INSERT INTO datos (nombre, contraseña, fecha_reg) VALUES ('$name' , '$contraseña' , '$fecha_reg')";
        $resultado = mysqli_query ($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">todo bn</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">todo mal</h3
            <?php
        } 
     }

    }

?>
//!CONEXION CON PHP.

</body>
</html>