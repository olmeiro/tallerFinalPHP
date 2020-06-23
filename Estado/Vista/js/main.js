$(document).ready(function(){

    $("#frmInsertarEstado").submit(function(event){

        event.preventDefault();
        
        let isValid = 0;

        if ( $("#Estado").val().length == 0)
        {
            //alert("Debe ingresar un nombre de estado");
            $("#valEstado").text("*Debe ingresar nuevo estado.");
            
        }
        else
        {
            $("#valEstado").text("");
            isValid++;
        }

        console.log("validado: " + isValid);

        if(isValid == 1)
        {
            document.frmInsertarEstado.submit();
        }
        else
        {
            Swal.fire('Faltan campos por diligenciar.');
            isValid = 0;
        }
    })
})