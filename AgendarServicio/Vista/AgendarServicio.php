<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}

require_once('../../conexion.php');
require_once('../../Servicio/Modelo/Servicio.php');
require_once('../../Servicio/Modelo/CrudServicio.php');
require_once('../../Operario/Modelo/Operario.php');
require_once('../../Operario/Modelo/CrudOperario.php');

$Servicio = new Servicio(); // creal el objeto competencia
$CrudServicio = new CrudServicio();
$ListarServicios = $CrudServicio->ListarServicios();

$Operario = new Operario();
$CrudOperario = new CrudOperario();
$ListarOperarios = $CrudOperario->ListarOperarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listar Contacto</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
              <a class="nav-link" href="#" tabindex="-1">Contactos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cerrar Sesión</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="../../CerrarSesion.php">Salir</a>
                <a class="dropdown-item" href="../../Usuario/Vista/editarUsuario.php">Editar mi usuario</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>
<br><br>
<!--
          <ul class="nav nav-fill">
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="InsertarContacto.php">Crear Contactos</a></button>
               </li>
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../TCPDF/examples/reporteClientes.php" target="_blank">Imprimir PDF</a></button>
               </li>
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../Estado/Vista/listarEstado.php">Crear Nuevo Estado</a></button>
               </li>
          </ul> -->
          <br>
           <h1 align="center">Agendar Servicio:</h1>
           <form action="../Controlador/ControladorAgendaServicio.php" method="POST" id="frmAgendarServicio" name="frmInsertarContacto">

               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="Nombre">Nombre del contacto</label>
                   <select name="IdServicio" id="IdServicio" class="form-control">
                     <option value="">Seleccione número de servicio</option>
                     <?php
                       foreach ($ListarServicios as $Servicio)
                       {
                         ?>
                         <option value="<?php echo $Servicio->getIdServicio();?>"><?php echo $Servicio->getNombreObra();?></option>
                         <?php
                       }
                      ?>
                   </select>
                   <small id="valNombre" class="form-text text-muted">
                       Seleccione el ID de su servicio.
                     </small>
                     <label for="Nombre" id="valNombre"></label>
                 </div>

                 <div class="form-group col-md-6">
                   <label for="Apellido_1">Primer Apellido</label>
                   <select name="IdOperario" id="IdOperario" class="form-control">
                     <option values="">Seleccione Operario</option>
                     <?php
                       foreach ($ListarOperarios as $Operario)
                       {
                         ?>
                         <option value="<?php echo $Operario->getIdOperario();?>"><?php echo $Operario->getNombre()."-".$Operario->getApellido();?></option>
                         <?php
                       }
                      ?>
                   </select>
                   <small id="valApellido_1" class="form-text text-muted">
                       Ingrese primer apellido del contacto, sólo caracteres.
                     </small>
                     <label for="Apellido_1" id="valApellido1"></label>
                 </div>
               </div>

               <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="Tarea1">Tarea 1</label>
                     <input type="text" class="form-control" id="Tarea1" name="Tarea1">
                     <small id="valTarea1" class="form-text text-muted">
                      Ingrese la tarea del operario.
                     </small>
                     <label for="Apellido_2" id="valApellido2"></label>
                   </div>

                   <div class="form-group col-md-6">
                     <label for="Tarea2">Tarea 2</label>
                     <input type="text" class="form-control" id="Tarea2" name="Tarea2">
                     <small id="valTarea2" class="form-text text-muted">
                       Ingrese la segunda tarea del operario.
                     </small>
                     <label for="Documento" id="valDocumento"></label>
                   </div>
                 </div>

                 <div class="form-row">


                   <div class="form-row">
                       <div class="form-group col-md-12">
                         <input type="hidden" name="Registrar" id="Registrar" value="">
                         <input type="hidden" name="Registrar">
                         <button type="button" class="btn btn-primary btn-lg" id="AgregarOperario" name="AgregarOperario" onclick="AgregarDetalle()" style="margin-right:5px;">Agregar Operario</button>
                       </div>
                   </div>
                   <div class="form-row">
                       <div class="form-group col-md-12">
                         <input type="hidden" name="Registrar" id="Registrar" value="">
                         <button type="submit" class="btn btn-primary btn-lg" id="Registrar" name="Registrar">Registrar</button>
                       </div>
                   </div>

                   <div class="form-group col-md-8">
                     <table id="ListarOperarios" border="2" class="table">
                     <thead>

                       <th scope="col">Nombre</th>
                       <th scope="col">Codigo Operario</th>
                       <th scope="col">Tarea 1</th>
                       <th scope="col">Tarea 2</th>
                       <th scope="col">Eliminar</th>
                     </thead>
                     <tbody>
                     </tbody>

                     </table>
                     <input type="text" id="OperariosAgregados" name="OperariosAgregados" value="0" readonly>

                   </div>


           </form>
 </div>
          <div class="form-group col-md-12" style="text-align: center; margin-top:55px;">
            <button type="button" class="btn btn-outline-dark"><a href="../../navegar.php" style="color:black;">Volver</button>
          </div>

     <div class="form-group col-md-12" style="text-align: center; margin-top:55px;">
               <h6 class="">Presentado por Olmeiro Orozco Ortiz SENA-ADSI 2020 &copy</h6>
     </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
  function AgregarDetalle()
  {
    //let IdOperario = $("#IdOperario").val();
    let IdOperario = $('#IdOperario').val();
    let NombreOperario = $('select[name="IdOperario"] option:selected').text();
    let Tarea1 = $("#Tarea1").val();
    let Tarea2 = $("#Tarea2").val();
    // let PrecioProducto = $("#PrecioProducto").val();
    // let ValorDetalle = CantidadProducto * PrecioProducto;

    //variable autoincremento para el id de los productos agregados:
    $('#OperariosAgregados').val(parseInt($('#OperariosAgregados').val()) + 1 );
    let ConsecutivoOperario = $("#OperariosAgregados").val();

    let htmlTags = '<tr id="'+ConsecutivoOperario+'">' +
      '<td>'+ NombreOperario + '</td>'+
      '<td>'+ '<input type="text" id="IdOperario'+ConsecutivoOperario+'"name="IdOperario'+ConsecutivoOperario+'" value="'+IdOperario+'">' + '</td>'+
      '<td>'+ '<input type="text" id="Tarea1'+ConsecutivoOperario+'"name="Tarea1'+ConsecutivoOperario+'" value="'+Tarea1+'">' + '</td>'+
      '<td>'+ '<input type="text" id="Tarea2'+ConsecutivoOperario+'"name="Tarea2'+ConsecutivoOperario+'" value="'+Tarea2+'">' + '</td>'+
      // '<td>'+ '<input type="text" id="ValorDetalle'+ConsecutivoProducto+'"name="ValorDetalle'+ConsecutivoProducto+'" value="'+ValorDetalle+'">' + '</td>'+
      '<td>'+ '<button type="button" class="borrar">Eliminar</button>' + '</td>'+
      '</tr>';

    $('#ListarOperarios tbody').append(htmlTags);

  }

  $(function (){
    $(document).on('click','.borrar',function(event){
      event.preventDefault();
      $(this).closest('tr').remove();
    });
  });

  </script>
</html>
