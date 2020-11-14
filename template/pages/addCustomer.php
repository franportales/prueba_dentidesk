<?php 
ob_start();
session_start();
include '../../includes.php';

if(isset($_SESSION['customer_id'])){
    
    $customer=$customerC->getCustomer($_SESSION['customer_id']);
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">

  <link rel="stylesheet" href="../asset/css/style.css">
  <link rel="stylesheet" href="../asset/css/style.scss">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="../asset/js/login.js"></script>
  <script type="text/javascript" src="../asset/js/registration.js"></script>
  <script type="text/javascript" src="../asset/js/mainv2.js"></script>

  
</head>
<body class="la-barra">
<header id="header">
    <?php include '../_partials/header.php'; ?>
</header>


<section class="container mi-cuenta">
        <form id="form-inscripcion" action="javascript:void();" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="row personal-data">
                        <h2>Agegar Usuario</h2>
                        <div class="col-md-6">
                            <div class="inputs">
                                <label>*E-mail</label>
                                <input type="text" placeholder="Dirección de correo electrónico" id="mail" name="mail" autocomplete="off" value="">
                                <label for="email" class="error" style="display:none;"></label>

                                <label>*Nombre</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre"  autocomplete="off">
                                <label for="nombre" class="error" style="display:none;"></label>

                                <label>*Apellido</label>
                                <input type="text" id="apellido" name="apellido" placeholder="Apellido"  autocomplete="off">
                                <label for="apellido" class="error" style="display:none;"></label>

                                <label>*RUT</label>
                                <input type="text" placeholder="Rut (ej: 12.345.678-9)" id="rut" name="rut" maxlength="12" style="text-transform:uppercase;" autocomplete="off" >
                                <label for="rut" class="error" style="display:none;"></label>
                                
                                <label>*Contraseña</label>
                                <input id="passw" name="passw" placeholder="*****" type="password" autocomplete="off">
                                <label for="passw" generated="true" class="error"></label>
                                <label>*Repetir Contraseña</label>
                                <input id="passw2" name="passw2" placeholder="*****" type="password" autocomplete="off">
                                <label for="passw2" generated="true" class="error"></label>
                                <label>*Teléfono Celular</label>									
                                <div class="col-xs-2 no-padding">
                                    <input type="text" value="+569" id="prefijo" name="prefijo" disabled>
                                </div>
                                <div class="col-xs-10 cel">    
                                    <input type="text" placeholder="Teléfono Celular (ej: 12345678)" id="telefono_celular" name="telefono_celular"  maxlength="8" autocomplete="off">
                                </div>
                                <label for="telefono_celular" generated="true" class="error"></label> 
                                <p>*Campos Obligatorios</p>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <div class="col-md-12 col-bttn">
                    <button class="bttn-save" id="enviar" type="submit">
                      Guardar
                    </button>
                </div>
            </div>

        </form>
    </section>