<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../Modelo/Servicio.php');
$Servicio = new Servicio();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Servicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container">
      <h1 align="center">Ingresar Servicio</h1>
      <form id="frmIngresoServicio" action="../Controlador/ControladorServicio.php" method="post">
        <!-- Id Servicio: <input type="text" name="IdServicio" id="IdServicios"> -->
        <br>
        <label class="form-control" for="NombreObra">Nombre Obra</label>
        <input class="form-control" type="text" name="NombreObra" id="NombreObra">
        <br>
        <label class="form-control" for="IdEstadoServicio">Id Estado Servicio:</label>
         <input class="form-control" type="text" name="IdEstadoServicio" id="IdEstadoServicio">
        <br>
        <label class="form-control" for="IdCotizacion">Id Cotización:</label>
        <input class="form-control" type="text" name="IdCotizacion" id="IdCotizacion">
        <br>
        <label class="form-control" for="">Fecha Inicio:</label>
        <input class="form-control" type="date" id="FechaInicio" name="FechaInicio">
        <br>
        <label for="FechaFin" class="form-control">Fecha Fin:</label>
        <input class="form-control" type="date" id="FechaFin" name="FechaFin">
        <br>
        <input type="hidden" name="Registrar" id="Registrar" value="">
        <!-- //hidden para identificar que vista realiza la peticion -->
        <button type="submit" class="btn btn-dark" class="nav-link activ" name="button">Ingresar Servicio</button>
        <button type="button" class="btn btn-warning" name="button"><a class="nav-link activ" href="../../navegar.php">Volver</a></button>

      </form>

    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
