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
     <div class="row" >
     <div class="col-md-12">
     <header class="header" style="margin-top: 90px;">
          <h1 align="center">Agenda De Contactos</h1>
     </header >
     </div>
     <section class="section-1" style="background-color: #BBEDFC; border-radius: 5px;" align="center">
          <form action="Usuario/Controlador/ControladorUsuario.php" method="POST">
               <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre">
               </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="Clave" name="Clave">
               </div>
                <input type="hidden" name="Ingresar" id="Ingresar">
               <button type="submit" name="Acceder" class="btn btn-primary">Ingresar</button>
               <br>
               <br>
               <div class="col registro">
                    <a href="Usuario/Vista/ingresarUsuario.php">Registrar Usuario</a>
               </div>
          </form>
     </section>
     <section class="section-1">
     <div class="footer">
          <h6 class="mipie">Presentado por Olmeiro Orozco Ortiz SENA-ADSI 2020 &copy</h6>     
     </div>
     </section>
 </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>