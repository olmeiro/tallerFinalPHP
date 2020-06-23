<?php

require_once('../../conexion.php');
require_once('../Modelo/usuario.php');
require_once('../Modelo/crudUsuario.php');

$Usuario = new usuario();
$CrudUsuario = new crudUsuario();


if(isset($_POST["Acceder"]))//Validar que se realiza la peticion de acceder
{
  // echo "Acceder"; Ahora obtengo los valores del form con el name:
  $Usuario->setNombre($_POST["Nombre"]); //Asignar valor a atributo NombreUsuario
  $Usuario->setClave($_POST["Clave"]); //Asignar valor a atributo Contrasena

  //var_dump($Usuario);//Comprobacion de objeto
  $Usuario = $CrudUsuario->ValidarAcceso($Usuario);

  //var_dump($Usuario);

  if($Usuario->getExiste() == 1)
  {
    session_start(); //Inicializar sesión
    //Definir las variables de session a emplear en el aplicativo:
    //ahora la puedo utilizar en el menu.php
    $_SESSION["Nombre"] = $Usuario->getNombre();
    $_SESSION["IdUsuario"] = $Usuario->getIdUsuario();
    $_SESSION["Estado"] = $Usuario->getEstado();
    header("Location:../../navegar.php");
  }
  else
  {
    ?>
    <script>
      alert("Usuario y/o clave incorrectos");
      document.location.href = "../../index.php";
    </script>
    <?php

      // header("Location:../../index.php");
  }


}

else if(isset($_POST["btnRegistrarUsuario"])){

    $Usuario->setIdUsuario(null);
    $Usuario->setNombre($_POST["nombre"]);
    $Usuario->setClave($_POST["clave"]);
    $Usuario->setTipoUsuario($_POST["tipoUsuario"]);
    $Usuario->setEstado($_POST["estado"]);

    $CrudUsuario::InsertarUsuario($Usuario);

}

else if (isset($_POST["Ingresar"])) {

    if (isset($_POST["nombre"])==$usuario->getNombre() && isset($_POST["clave"])==$usuario->getClave()) {
        header("location:../navegar.php");
    } else {
        //echo "usuario y/o clave inválido";
        ?>
        <script>
            alert("usuario y/o clave inválido");
            document.location="../Index.php";
        </script>
        <?php
    }
}


?>