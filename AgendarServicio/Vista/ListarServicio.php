<?php

session_start();

if (!(isset($_SESSION["Nombre"]))) {
 header("location:../../Index.php");
}


require_once('../../conexion.php');
require_once('../Modelo/DetalleAgendaServicio.php');
require_once('../Modelo/CrudDetalleAgendaServicio.php');

$CrudDetalleAgendaServicio = new CrudDetalleAgendaServicio();
$ListaDetalleServicio = $CrudDetalleAgendaServicio->ListarDetalleServicio();

//var_dump($ListaCotizacion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Detalle Servicio</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <div class="container">

       <h1>Listado de Agenda de Servicio</h1>
       <button type="button" class="btn btn-outline-info"  name="button"><a href="../../TCPDF/examples/reporteDetalleServicio.php" target="_blank">Mostrar PDF</a></button>


          <table align="center" class="table table-bordered col-md-8" class="table">
               <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id Detalle Agenda Servicio</th>
                    <th scope="col">Id Servicio</th>
                    <th scope="col">Id Operario</th>
                    <th scope="col">Tarea 1</th>
                    <th scope="col">Tarea 2</th>
                    </tr>
               </thead>
               <tbody>
               <?php
               foreach($ListaDetalleServicio as $DetalleServicio) {
                    ?>
                    <tr>
                    <td><?php echo $DetalleServicio->getIdDetalleAgendaServicio();?></td>
                    <td><?php echo $DetalleServicio->getIdServicio();?></td>
                    <td><?php echo $DetalleServicio->getIdOperario();?></td>
                    <td><?php echo $DetalleServicio->getTarea1();?></td>
                    <td><?php echo $DetalleServicio->getTarea2();?></td>
                    <?php
               }
               ?>
               </tbody>
          </table>

          <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../navegar.php">Volver</a></button>
     </div>
     <br>
     <!-- <footer class="footer " align="center">
          <div class="container">
          <span>Trabajo PHP  Realizado por Juan Felipe Garcia Duque C.C 15.442.460 ADSI</span>
          </div>
     </footer> -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
