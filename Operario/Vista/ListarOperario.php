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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   <body>

     <div class="container">
       <h1 align="center">Lista De Operarios</h1>

     <table border="1" align="center" class="table">
       <thead>
         <th>Id Operario</th>
         <th>Nombre </th>
         <th>Apellido</th>
         <th>Documento</th>
         <th>Celular</th>
         <th>Acción</th>
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
     <a class="nav-link activ btn-primary btn-lg" type="button" href="../../navegar.php" style="width:150px; margin-left:640px; margin-top:10px; align="center">Volver</a>

      </div>

   </body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 </html>
