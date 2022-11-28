<?php
include("../bd/conectar.php");
session_start();

if($_SESSION['tipoUsuario'] != 'profesor') {
  echo '<script>
  window.history.back();
  </script>';
  // header('Location: ../../login.html');
}



  $consultaestudiante = mysqli_query($conexion,"SELECT * FROM estudiantes");
  $consultacurso = mysqli_query($conexion,"SELECT * FROM grado");



  $cantidad_estudiantes = mysqli_num_rows($consultaestudiante);


  $cantidad_cursos = mysqli_num_rows($consultacurso);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../css/estilos.css">
   <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&amp;display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/e4ab74e3d9.js" crossorigin="anonymous"></script>
    <title>Administrador | Inicio</title>
</head>
<body>
     <header>
    <div class= "contenedor_usuario">
      <input type="checkbox" id="perfil">
      <label for="perfil"><img src="../iconos/usuario.svg" alt="Cuenta"></label>
<ul class="menu-perfil">
  <li><a href="verPerfil.php">Ver Perfil</a></li>
  <li><a href="../cerrarSesion.php"><img src="../iconos/power.svg" alt="Cerrar Sesion" title="Cerrar Sesión">Cerrar Sesión</a></li>
</ul>
<div class="info-usuario">
      <p><?php echo $_SESSION['nomUsuario']?></p>
      <p><?php echo $_SESSION['tipoUsuario']?></p>
      </div>
    </div>
  <nav class="nav-menu">
  <input type="checkbox" id="checkbox-menu">
 <label for="checkbox-menu" class="icono-menu"><img src="../iconos/menu.svg" alt=""></label>
    <ul>
        <li><a href="paginaPrincipal.php" >Inicio</a></li>
        <li><a href="registroNota.php">Registro de Notas</a></li>
        <li><a href="ListadoEstudiantesCurso.php" >Cursos</a></li>

    </ul>
  </nav>
  </header>
<main class="paginaPrincipal">
<section class="usuarios">
<div class="cantidad_usuarios">
    <div><h2>Estudiantes</h2></div>
    <div><i class="bi bi-person-fill"></i></div>
    <p><?php echo $cantidad_estudiantes?></p>
    <!-- <p><//?php echo cantidad_usuarios('administrador') ?></p> -->
</div>
<div class="cantidad_usuarios">
    <div><h2>Cursos</h2></div>
    <div><i class="fa-solid fa-chalkboard-user"></i></div>
    <p><?php echo $cantidad_cursos?></p>
</div>


</section>
</main>
   <?php
   include("../footer.php");
   ?>
</body>
</html>
