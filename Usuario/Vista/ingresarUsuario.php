<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosU.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </script>
    <title>Registrar</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../../navegar.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/Vista/ingresarUsuario.php">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Contactos/Vista/listarContacto.php" tabindex="-1">Contactos</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cerrar Sesión</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="CerrarSesion.php">Salir</a>
                <a class="dropdown-item" href="../../Usuario/Vista/editarUsuario.php">Editar mi usuario</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

<h1 align="center">Ingrese Datos Del Nuevo Usuario</h1>
       <form name="frmUsuarios" id="frmUsuarios" method="POST" action="../Controlador/ControladorUsuario.php">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Nombre">Nombre del usuario</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                <small id="valNombre" class="form-text text-muted">
                    Ingrese nombre del usuario, sólo caracteres.
                </small>
                <label for="Nombre" id="validar_nombre"></label>
            </div>

            <div class="form-group col-md-6">
                <label for="Apellido_1">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave">
                <small id="valApellido_1" class="form-text text-muted">
                    Ingrese contraseña.
                </small>
                <label for="" id=""></label>
            </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Apellido_2">Tipo de usuario</label>
                <input type="text" class="form-control" id="tipoUsuario" name="tipoUsuario">
                <small id="Apellido_2" class="form-text text-muted">
                    Ingrese el tipo de usuario (1 Activo - 0 Inactivo).
                </small>
                <label for="validar_tipoUsuario" id="validar_tipoUsuario"></label>
                </div>

                <div class="form-group col-md-6">
                <label for="Documento">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado">
                <small id="valDocumento" class="form-text text-muted">
                    Ingrese estado del usuario 1 activo - 0 inactivo.
                </small>
                <label for="validar_estado" id="validar_estado"></label>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="hidden" name="btnRegistrarUsuario">
                    <button type="submit" class="btn btn-primary btn-lg" id="RegbtnRegistrarUsuarioistrar" name="btnRegistrarUsuario">Registrar</button>
                    
                </div>
            </div>
            </form>
       

       
            <div class="form-group">
                <button type="button" class="btn btn-secondary" name="boton" id="btnLimpiar"> Limpiar</button>
                <button type="button" class="btn btn-secondary" name="boton" id="btnVolver" onclick="location.href='../../navegar.php'"> Volver</button>
            </div>


    
</div>
 
</body>
<script src="js/funcionesU.js"></script>
</html>

   