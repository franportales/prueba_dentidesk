$(document).ready(function(){
    
    $("#enviar").click(function(e){
        e.preventDefault();
        enviarForm();
       
    });


function enviarForm() {
    var parametros = $('#form-inscripcion').serialize();
    $.ajax({
        data: parametros,
        url: '../../ajax/addcustomer.php',
        type: 'post',
        dataType:"json",
        async: false,
        success: function(response) {
            
            if (response.estado==2){
                Swal.fire("¡Usuario creado!", "Esta listo para iniciar session.", "success");
            }else{
                Swal.fire("¡Atención!", "Se produjo un error al actualizar sus datos. Por favor comuníquese con nosotros.", "error");
               
                console.log(response); 
            }
            $("#form-inscripcions").submit();
        }
    }); 
}
});