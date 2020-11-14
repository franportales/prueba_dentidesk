$(document).ready(function(){
    
    $("#enviar").click(function(e){
        e.preventDefault();
        enviarForm();
       
    });


function enviarForm() {
    var parametros = $('#form-actualizar-datos').serialize();
    $.ajax({
        data: parametros,
        url: '../../ajax/actualizar-datos.php',
        type: 'post',
        dataType:"json",
        async: false,
        success: function(response) {
            
            if (response.estado==2){
                $("#form-actualizar-datos").submit();
            }else{
                Swal.fire("¡Atención!", "Se produjo un error al actualizar sus datos. Por favor comuníquese con nosotros.", "error");
               
                console.log(response); 
            }
        }
    }); 
}


$('.modal-login .bg').click( function() {
    $('.modal-login').removeClass('visible')
})
$('.modal-login .cerrar').click( function() {
$('.modal-login').removeClass('visible');
$("#password-error").text("");
$("#password-error").hide();
})

$('header .item-user-xs').click( function() {
$('.modal-login').toggleClass('visible')
})

$('.user').click( function() {
$('.cuenta-float-old').toggleClass('open')
})

$('.cuenta-float-close').click( function () {
$('.cuenta-float-old').removeClass('open')
})

$('header .item-user-out').click( function() {
$('.modal-login').toggleClass('visible');
$("#password-error").text("");
$("#password-error").hide();
})

$('header .item-user, header .item-user-xs').click( function() {
$('.cuenta-float').toggleClass('open')
})

$('.cuenta-float-close').click( function () {
$('.cuenta-float').removeClass('open')
})


});

