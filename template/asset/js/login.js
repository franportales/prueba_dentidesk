$(document).ready(function () {

    $("#loginvarnew").click(function(e){
        e.preventDefault();
    
        var email = $("#emailnew").val();
        var pass  = $("#passwordnew").val();
        if(email == "" && pass == "")
        {
            Swal.fire("¡Error!", "Debes ingresar tu e-mail y contraseña.", "warning");
        }
        else if(email == "")
        {
            Swal.fire("¡Error!", "Debes ingresar tu e-mail", "warning");
        }
        else if(pass == "")
        {
            Swal.fire("¡Error!", "Debes ingresar tu contraseña", "warning");
        }
        else
        {
            $.ajax({
                type: 'POST',
                url: 'ajax/validarloginnew.php',
                data: {email: email, pass: pass },
                dataType:"json",
                async: false,
                success: function(data){
                    //alert(data.estado)
                    if(data.estado == 2)
                    {
                        Swal.fire("¡Error!", "Ingresa un e-mail valido", "warning");
                    }
                    else if(data.estado == 3)
                    {
                        Swal.fire("¡Iniciaste Sesión!", "Bienvenido.", "success");
                       
                    }
                    else 
                    {
                        Swal.fire("¡Error!", "Verifica tu e-mail y contraseña e intenta nuevamente", "warning");
                    }
                    setTimeout(function(){window.top.location="/"} , 2000);
                    //document.location.href = "/";
                }
            });
        }
    });
    
    
});