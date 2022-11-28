<?php
 include("../bd/conectar.php");
 session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Administrador</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="body-agregar">
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
          <li class="link_usuarios"><a Href="#" class="actual link_usuarios">Usuarios</a><ul class="menu-usuarios">
           <li><a href="listadoAdministradores.php" class="actual">Administradores</a></li>
            <li><a href="listadoProfesores.php" >Profesores</a></li>
            <li><a href="listadoEstudiantes.php">Estudiantes</a></li>
          </ul></li>
          <li><a href="listadoMaterias.php">Materias</a></li>
          <li><a href="listadoGrado.php">Grados</a></li>
        </ul>
    </nav>
  </header>
  <main>

    <form  action="procesarAgregarAdministrador.php" method="get">

    <div class= "contenedor-agregar">
      <h2 class="form_titulo">Agregar Administrador</h2>

      <div class="contenedor-campos">
        <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"   required>
  </div>

  <div class="contenedor-campos">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"  required>
  </div>

  <div class="contenedor-campos">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono"  id="telefono"   required>
  </div>

    <div class="contenedor-campos">
      <label for="email">Correo</label>
    <input type="email" name="correo" id="email" required>
  </div>

  <div class="contenedor-campos">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario"    pattern="[a-zA-Z0-9]{4,20}"    title="su nombre de usuario debe contener al menos 4 caracteres y solo letras o números" required>
</div>

    <div class="contenedor-campos">
      <label for="clave">Contraseña</label>
    <input type="password" name="clave" id="clave"   pattern="[a-zA-Z0-9]{4,20}"    title="su contraseña debe contener al menos 4 caracteres y solo letras o números" required>
  </div>
  <input type="submit" class="btnes" value="Agregar">
    <p>Para ver el listado actualizado<a href="ListadoAdministradores.php">Click Aquí</a></p>
    </div>
    </form>
    </main>
</body>
</html>
