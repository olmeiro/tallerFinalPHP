

  $(document).ready(function(){
      $("#AgregarOperario").click(function(){

          //event.preventDefault();

          //Validación del nombre:

          let validado = 0;

          if( $("#IdServicio").val().length == 0 )
          {
              $("#valIdServicio").text("* Ingrese un servicio.");
          }
          else
          {
              $("#valIdServicio").text("");
              validado++;
          }


          if( $("#IdOperario").val().length == 0 )
          {
              $("#valIdOperario").text("* Ingrese un operario.");
          }
          else
          {
              $("#valIdOperario").text("");
              validado++;
          }

          if( $("#Tarea1").val().length == 0 )
          {
              $("#valTarea1").text("* Ingrese primer tarea del operario.");
          }
          else
          {
              $("#valTarea1").text("");
              validado++;
          }

          if( $("#Tarea2").val().length == 0 )
          {
              $("#valTarea2").text("* Ingrese segunda tarea del operario.");
          }
          else
          {
              $("#valTarea2").text("");
              validado++;
          }



          console.log("validado: " + validado);
          let OperariosAgregados = $("#OperariosAgregados").val();
          console.log("# operarios agregar: " + OperariosAgregados);

          if(validado == 4)
          {
             let IdOperario = $('#IdOperario').val();
             let NombreOperario = $('select[name="IdOperario"] option:selected').text();
             let Tarea1 = $("#Tarea1").val();
             let Tarea2 = $("#Tarea2").val();

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


              // document.frmInsertarContacto.submit();
          }
          else
          {
              alert('Faltan campos por diligenciar.');
              validado = 0;
          }
      })
  })

  $(document).ready(function(){
    $("#frmAgendarServicio").submit(function(event){

      event.preventDefault();
      let validado = 0;

      if($("#OperariosAgregados").val() == 0 )
      {
        alert("No ha agregado operarios");
      }
      else
      {
        validado++;
      }

      if(validado == 1)
      {
          document.frmInsertarContacto.submit();
      }
      else
      {
        alert ("Debe agregar operarios");
      }
    })
  })

$(function (){
  $(document).on('click','.borrar',function(event){
    event.preventDefault();
    $(this).closest('tr').remove();
  });
});
