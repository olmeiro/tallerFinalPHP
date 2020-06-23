<?php

session_start();

if (!(isset($_SESSION["Nombre"]))) {
 header("location:../../Index.php");
}

require_once('../../conexion.php');
require_once('../Modelo/AgendarServicio.php');// vincular la clase
require_once('../Modelo/CrudAgendarServicio.php');
require_once('../Modelo/DetalleAgendaServicio.php');
require_once('../Modelo/CrudDetalleAgendaServicio.php');

$AgendarServicio = new AgendarServicio(); // creal el objeto competencia
$CrudAgendarServicio = new CrudAgendarServicio();
$DetalleAgendaServicio = new DetalleAgendaServicio();
$CrudDetalleAgendaServicio = new CrudDetalleAgendaServicio();

//echo $CodigoFacturaGenerado;

if (isset($_POST["Registrar"])){// si lapeticion se registra

     $AgendarServicio->setIdServicio($_POST["IdServicio"]);
     $IdAgendaServicioGenerado=$CrudAgendarServicio::InsertarServicio($AgendarServicio); //va bien

     if($IdAgendaServicioGenerado>-1){

          echo "$IdAgendaServicioGenerado"."<br>";
          $OperariosAgregar = $_POST["OperariosAgregados"];
          echo "numero operarios a agregar: ".$OperariosAgregar;
          $RegistroExitoso = 0;

          for($ConsecutivoOperario=1;$ConsecutivoOperario<=$OperariosAgregar;$ConsecutivoOperario++)
          {
               $DetalleAgendaServicio->setIdServicio($IdAgendaServicioGenerado);
               $IdOperario = "IdOperario".$ConsecutivoOperario;
               if(isset($_POST[$IdOperario]))
               {
                    $DetalleAgendaServicio->setIdOperario($_POST[$IdOperario]);
                    $Tarea1 = "Tarea1".$ConsecutivoOperario;
                    $DetalleAgendaServicio->setTarea1($_POST[$Tarea1]);
                    $Tarea2= "Tarea2".$ConsecutivoOperario;
                    $DetalleAgendaServicio->setTarea2($_POST[$Tarea2]);

                    $RegistroExitoso =$CrudDetalleAgendaServicio::InsertarDetalleServicio($DetalleAgendaServicio);
               }
          }
          if ($RegistroExitoso==1) {
               echo "Registro Detalle exitoso";
          }
          else
          {
               echo " Error en el Registro";
          }

     }
}

?>
