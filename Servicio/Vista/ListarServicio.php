<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../../conexion.php');
require_once('../Modelo/Servicio.php');
require_once('../Modelo/CrudServicio.php');

$CrudServicio = new CrudServicio();
$ListarServicios = $CrudServicio->ListarServicios();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>ListarServicio</title>
   </head>
   <body>
     <div class="container">

    <!-- <div class=""> -->
      <h1 align="center">Listado De Servicios</h1>
    <!-- </div> -->


     <table border="1" align="center" class="table">
       <thead>
         <th>Id Servicio</th>
         <th>Nombre Obra</th>
         <th>N° Estado Servicio</th>
         <th>N° Cotizacion</th>
         <th>Fecha Inicio</th>
         <th>Fecha Fin</th>
         <th>Acción</th>
       </thead>
       <tbody>
         <?php
           foreach ($ListarServicios as $Servicio)
           {
             ?>
               <tr>
                 <td><?php echo $Servicio->getIdServicio()?></td>
                 <td><?php echo $Servicio->getNombreObra()?></td>
                 <td><?php echo $Servicio->getIdEstadoServicio()?></td>
                 <td><?php echo $Servicio->getIdCotizacion()?></td>
                 <td><?php echo $Servicio->getFechaInicio()?></td>
                 <td><?php echo $Servicio->getFechaFin()?></td>
                 <td>
                    <a href="EditarServicio.php?IdServicio=<?php echo $Servicio->getIdServicio();?>">Editar</a>
                    <a href="../Controlador/ControladorServicio.php?IdServicio=<?php echo $Servicio->getIdServicio();?>&Accion=EliminarServicio">Eliminar</a>
                  </td>
               </tr>
             <?php
           }
          ?>
       </tbody>
     </table>
         <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../navegar.php">Volver</a></button>
        </div>
   </body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 </html>
