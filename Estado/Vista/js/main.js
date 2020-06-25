// $(document).ready(function(){
//
//     $("#frmInsertarEstado").submit(function(event){
//
//         event.preventDefault();
//
//         let isValid = 0;
//
//         if ( $("#Estado").val().length == 0)
//         {
//             //alert("Debe ingresar un nombre de estado");
//             $("#valEstado").text("*Debe ingresar nuevo estado.");
//
//         }
//         else
//         {
//             $("#valEstado").text("");
//             isValid++;
//         }
//
//         console.log("validado: " + isValid);
//
//         if(isValid == 1)
//         {
//             document.frmInsertarEstado.submit();
//         }
//         else
//         {
//             Swal.fire('Faltan campos por diligenciar.');
//             isValid = 0;
//         }
//     })
// })

$(document).ready(function() {
     $("#CrearEstado").click(function(event){
          event.preventDefault();
          // var url = "verificarEstado.php";
          var url = "../Controlador/ControladorEstado.php";

          if ($("#Estado").val().length==0 ) {
               alert(" No se ingreso estado para  analisis");
          }
          else
          {
               $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmInsertarEstado").serialize(),
                    success: function(data)
                    {
                         $("#mensaje").html(data);
                    }
               });
               // document.frmInsertarEstado.submit();
          }
     });
});

//Para eliminar::
