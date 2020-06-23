<?php

session_start();

if(!(isset($_SESSION["Nombre"]))) //si la sesión no existe redireccionar al login:
{
  //redireccionar al al login:
  header("Location:index.php");
}

// echo $_SESSION["NombreUsuario"];
// echo "Rol: " . $_SESSION["IdRol"];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Index Kreemo</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/estilosIndex.css"></link>
</head>
<body>
     <div class="container">
          <div class="row" style="">
               <div class="col-md-12">

               <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="../../navegar.php">Inicio <span class="sr-only">(current)</span></a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../Usuario/Vista/ingresarUsuario.php">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1">Contactos</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cerrar Sesión</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="CerrarSesion.php">Salir</a>
                <a class="dropdown-item" href="Usuario/Vista/editarUsuario.php">Editar mi usuario</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>

                    <header class="header" style="margin-top: 80px;">
                    <h1 align="center">Agenda De Contactos</h1>
                    </header >
                    <section class="section-1" align="center" style="background-color: #98D3E5; margin-bottom:20px; border-radius: 5px;">
                         <div class="" align="center" style="margin-right:55px;"><a type="submit" href="Contactos/Vista/listarContacto.php">Gestion Contactos</a></div>

                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="Estado/Vista/listarEstado.php">Gestion Estado Contactos</a></div>
                    </section>

                    <section class="section-1" align="center" style="background-color: #98D3E5; margin-bottom:20px; border-radius: 5px;">
                         <div class="" align="center" style="margin-right:55px;"><a type="submit" href="AgendarServicio/Vista/AgendarServicio.php">Agendar Servicio</a></div>
                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="AgendarServicio/Vista/ListarServicio.php">Listar Agendas de Servicios</a></div>
                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="Servicio/Vista/IngresarServicio.php">Ingresar Servicios</a></div>
                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="Servicio/Vista/ListarServicio.php">Listar Servicios</a></div>
                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="Operario/Vista/IngresarOperario.php">Ingresar Operarios Operarios</a></div>
                         <div class="" align="center" style="margin-left:55px;"><a type="submit" href="Operario/Vista/ListarOperario.php">Listar Operarios</a></div>
                    </section>

                    <!-- <section class="section-2"  align="center" sytle="margin-top:20px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                         </ol>
                         <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img src="img/img1.jpg" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                              <img src="img/img2.jpg" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                              <img src="img/img3.jpg" class="d-block w-100" alt="...">
                         </div>
                         </div>
                         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                         </a>
                         </div>
                    </section> -->

                    <div class="footer" style="text-align: center; margin-top:55px;">
                         <h6 class="">Presentado por Olmeiro Orozco Ortiz SENA-ADSI 2020 &copy</h6>
                    </div>
               </div>
          </div>
     </div>
</body>
<script src="js/Usuario/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
