<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../../conexion.php');
require_once('../Modelo/Operario.php');
require_once('../Modelo/CrudOperario.php');

$CrudOperario = new CrudOperario();
$ListarOperarios = $CrudOperario->ListarOperarios();

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
         <th>Id Operario</th>
         <th>Nombre </th>
         <th>Apellido</th>
         <th>Documento</th>
         <th>Celular</th>
       </thead>
       <tbody>
         <?php
           foreach ($ListarOperarios as $Operario)
           {
             ?>
               <tr>
                 <td><?php echo $Operario->getIdOperario()?></td>
                 <td><?php echo $Operario->getNombre()?></td>
                 <td><?php echo $Operario->getApellido()?></td>
                 <td><?php echo $Operario->getDocumento()?></td>
                 <td><?php echo $Operario->getCelular()?></td>
                 <td>
                    <a href="EditarOperario.php?IdOperario=<?php echo $Operario->getIdOperario();?>">Editar</a>
                    <a href="../Controlador/ControladorOperario.php?IdOperario=<?php echo $Operario->getIdOperario();?>&Accion=EliminarOperario">Eliminar</a>
                  </td>
               </tr>
             <?php
           }
          ?>
       </tbody>
     </table>
   </body>
 </html>
