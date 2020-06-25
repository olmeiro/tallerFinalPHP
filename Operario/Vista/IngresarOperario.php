<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../Modelo/Operario.php');
$Operario = new Operario();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Operarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1 align="center">Ingresar Operario</h1>
      <form id="frmIngresoOperario" name="frmIngresoOperario" action="../Controlador/ControladorOperario.php" method="post">
        <!-- Id Operario: <input type="text" name="IdOperario" id="IdOperario"> -->
        <br>
        <label class="form-control" for="NombreOperario">Nombre Operario:</label>
        <input class="form-control" type="text" name="NombreOperario" id="NombreOperario">
        <small id="valNombreOperario" class="form-text text-muted">
          Ingrese nombre del operario.
        </small>
        <br>
        <label class="form-control" for="ApellidoOperario">Apellido Operario:</label>
       <input class="form-control" type="text" name="ApellidoOperario" id="ApellidoOperario">
       <small id="valApellidoOperario" class="form-text text-muted">
           Ingrese apellido del operario.
       </small>
        <br>
        <label class="form-control" for="Documento">Documento:</label>
        <input class="form-control" type="text" name="Documento" id="Documento">
        <small id="valDocumento" class="form-text text-muted">
          Ingrese Documento del operario.
        </small>
        <br>
        <label class="form-control" for="Celular">Celular:</label>
        <input class="form-control" type="number" id="Celular" name="Celular">
        <small id="valCelular" class="form-text text-muted">
            ingrese número de celular del operario.
        </small>
        <br>
        <input class="form-control" type="hidden" name="Registrar" id="Registrar">
        <button type="submit" class="btn btn-primary btn-lg" id="Registrar" name="Registrar">Registrar Operario</button>
        <a class="nav-link activ btn-primary btn-lg" type="button" href="../../navegar.php" style="width:150px; margin-top:10px;">Volver</a>
      </form>
    </div>

  </body>
  <script src="js/main.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
