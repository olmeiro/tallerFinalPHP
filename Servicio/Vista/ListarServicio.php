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
     <title></title>
   </head>
   <body>
     <table border="1" align="center">
       <thead>
         <th>Id Servicio</th>
         <th>Nombre Obra</th>
         <th>N° Estado Servicio</th>
         <th>N° Cotizacion</th>
         <th>Fecha Inicio</th>
         <th>Fecha Fin</th>
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
   </body>
 </html>
