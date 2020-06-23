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
  </head>
  <body>
    <h1 align="center">Ingresar Operario</h1>
    <form id="frmIngresoServicio" action="../Controlador/ControladorOperario.php" method="post">
      <!-- Id Operario: <input type="text" name="IdOperario" id="IdOperario"> -->
      <br>
      Nombre Operario: <input type="text" name="NombreOperario" id="NombreOperario">
      <br>
      Apellido Operario: <input type="text" name="ApellidoOperario" id="ApellidoOperario">
      <br>
      Documento: <input type="text" name="Documento" id="Documento">
      <br>
      Celular:
      <input type="number" id="Celular" name="Celular">
      <br>
      <input type="hidden" name="Registrar" id="Registrar" value="">
      <!-- //hidden para identificar que vista realiza la peticion -->
      <button type="submit" name="button">Ingresar Operario</button>
    </form>
  </body>
</html>
