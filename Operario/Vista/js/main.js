
$(document).ready(function(){
    $("#frmIngresoOperario").submit(function(event){

        event.preventDefault();

        let validado = 0;

        if( $("#NombreOperario").val().length == 0 || $("#NombreOperario").val().length > 30)
        {
            $("#valNombreOperario").text("* Debe ingresar el nombre del contacto");
        }
        else
        {
            $("#valNombreOperario").text("");
            validado++;
        }

        if($("#ApellidoOperario").val().length == 0 || $("#ApellidoOperario").val().length > 30)
        {
            $("#valApellidoOperario").text("* Ingresar primer apellido del contacto");
        }
        else
        {
            $("#valApellidoOperario").text("");
            validado++;
        }

        var tipodocumento = document.getElementById("Documento");
        if(tipodocumento.value == "" || tipodocumento.value == null)
        {
            $("#valDocumento").text("* Debe ingresar el número de documento del contacto.");
        }
        else
        {
            $("#valDocumento").text("");
            validado++;
        }

        if($("#Celular").val().length == 0 || isNaN($("#Celular").val()))
        {
            $("#valCelular").text("* Ingrese un número de telefono valido");
        }
        else{
            $("#valCelular").text("");
            validado++;
        }

        console.log("validado: " + validado);

        if(validado == 4)
        {
          document.frmIngresoOperario.submit();
        }
        else
        {
            Swal.fire('Faltan campos por diligenciar.');
            validado = 0;
        }
    })
})

function limpiar()
{
    Swal.fire({
        title: 'Deseas limpiar los campos?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, limpiar campos!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Campos limpios!',
            'success'
          )
        }
      });

    $("input").val("");
    $("select").val("");
    $("span").val("");
}
