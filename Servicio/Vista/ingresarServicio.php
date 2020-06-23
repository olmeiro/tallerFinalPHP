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
  </head>
  <body>
    <h1 align="center">Ingresar Servicio</h1>
    <form id="frmIngresoServicio" action="../Controlador/ControladorServicio.php" method="post">
      <!-- Id Servicio: <input type="text" name="IdServicio" id="IdServicios"> -->
      <br>
      Nombre Obra: <input type="text" name="NombreObra" id="NombreObra">
      <br>
      Id Estado Servicio: <input type="text" name="IdEstadoServicio" id="IdEstadoServicio">
      <br>
      Id Cotización: <input type="text" name="IdCotizacion" id="IdCotizacion">
      <br>
      Fecha Inicio:
      <input type="date" id="FechaInicio" name="FechaInicio">
      <br>
      Fecha Fin:
      <input type="date" id="FechaFin" name="FechaFin">
      <br>
      <input type="hidden" name="Registrar" id="Registrar" value="">
      <!-- //hidden para identificar que vista realiza la peticion -->
      <button type="submit" name="button">Ingresar Servicio</button>
    </form>
  </body>
</html>
