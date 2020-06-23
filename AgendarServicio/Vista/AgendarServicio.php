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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Servicios</title>
  </head>
  <body>
    <h1 align="center">Agendar Servicio</h1>
    <form class="" action="../Controlador/ControladorAgendaServicio.php" method="post">
    Número de Servicio:
      <select name="IdServicio" id="IdServicio">
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
      <br>
      Operarios:
      <select name="IdOperario" id="IdOperario">
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
      <br>
      Tarea1:
      <input type="text" id="Tarea1" name="Tarea1">
      <br>
      Tarea2:
      <input type="text" id="Tarea2" name="Tarea2">
      <br>
      <button type="button" name="AgregarOperario" id="AgregarOperario" onclick="AgregarDetalle()" >Agregar Operario Al Servicio</button>
      <br>
      <input type="hidden" name="Registrar" id="Registrar" value="">
      <!-- //hidden para identificar que vista realiza la peticion -->
      <button type="submit">Registrar Servicio</button>
      <br>
      <table id="ListarOperarios" border="2">
      <thead>

        <th>Nombre</th>
        <th>Codigo Operario</th>
        <th>Tarea 1</th>
        <th>Tarea 2</th>
        <!-- <th>Documento</th>
        <th>Celular</th> -->
        <th></th>
      </thead>
      <tbody>

      </tbody>
      </table>
      <input type="text" id="OperariosAgregados" name="OperariosAgregados" value="0">
    </form>
    <br>
    <div align="center">
    <button><a href="../../navegar.php">Volver</a></button>
    </div>
  </body>
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
        '<td>'+ '<input type="text" id="Tarea1'+ConsecutivoOperario+'"name="Tarea1'+ConsecutivoOperario+'" value="'+Tarea2+'">' + '</td>'+
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
