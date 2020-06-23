<!-- Controla las peticiones enviadas desde los formularios -->

<?php
session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:../../index.php");
}
  require_once('../../conexion.php');
  require_once('../Modelo/Operario.php'); //Vincular la clase competencia
  require_once('../Modelo/CrudOperario.php'); //Vincular la clase Crud
  // echo "Controlador";

  $Operario = new Operario();
  $CrudOperario = new CrudOperario();

  if (isset($_POST["Registrar"])) //verifica si la peticion es de registrar
  {
    echo "Registrar";
    //$Cliente-> setIdServicio($_POST["IdServicio"]); //instanciar los atributos
    //$Servicio-> setIdServicio($_POST["NombreObra"]);
    $Operario-> setNombre($_POST['NombreOperario']);
    $Operario-> setApellido($_POST["ApellidoOperario"]);
    $Operario-> setDocumento($_POST['Documento']);
    $Operario-> setCelular($_POST["Celular"]);

    $CrudOperario::InsertarOperario($Operario); //llamar el metodo Insertar
  }
  else if (isset($_POST["Modificar"])) //verifica si la peticion es de registrar
  {
    //echo "Modificar";
    //$Cliente-> setCodigoCliente($_POST["CodigoCliente"]); //instanciar los atributos
    $Cliente-> setCodigoCliente($_POST["CodigoCliente"]);
    $Cliente-> setNombreCliente($_POST["NombreCliente"]);
    $Cliente-> setApellidosCliente($_POST["ApellidoCliente"]);
    $Cliente-> setDireccionCliente($_POST["DireccionCliente"]);

    $CrudCliente::ModificarCliente($Cliente);
  }

  else if ($_GET['Accion']=="EliminarOperario")
  {
    $CrudOperario::EliminarOperario($_GET["IdOperario"]);//Llamar al metodo eliminar
    //echo "En desarrollo";
    //echo $_GET["CodigoCompetencia"];

  }

 ?>
