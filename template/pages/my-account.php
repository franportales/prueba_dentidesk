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
  <script type="text/javascript" src="../asset/js/customer.js"></script>
  <script type="text/javascript" src="../asset/js/mainv2.js"></script>
  <script type="text/javascript" src="../asset/js/slick.min.js"></script>
  <script type="text/javascript" src="../asset/js/lity.min.js"></script>
  
</head>
<body class="la-barra">
<header id="header">
    <?php include '../_partials/header.php'; ?>
</header>
        
<div class="row">
         
<!--MI CUENTA-->
    <section class="container mi-cuenta">
        <form action="./my-account.php" id="form-actualizar-datos" class="js-customer-form" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-cuenta">
                        <ul>
                            <li class="active"><a href="{$link->getPageLink('identity')|escape:'html'}"><i class="icon-usuario"></i>Datos personales</a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="col-md-8">
                    <div class="row personal-data">
                            <div class="col-md-6">
                                <h2>Datos personales</h2>
                                <div class="inputs">
                                    <input type="hidden" name="id_customer" id="id_customer"value="<?php echo $customer->id_customer; ?>">
                                    <label>Nombre</label>
                                    <input name="name" id="name" type="text" value="<?php echo $customer->name; ?>" required>
                                    <label>Apellido</label>
                                    <input name="lastname" id ="lastname" type="text" value="<?php echo $customer->lastname; ?>" required>
                                    <label>Celular</label>
                                    <div class="col-xs-3 no-padding">
                                        <input type="text" value="+569" readonly="readonly" class="valid" aria-invalid="false">
                                    </div>
                                    <div class="col-xs-9">    
                                        <input type="" id="phone" name="phone" maxlength="8" value="<?php echo $customer->phone; ?>" onkeypress="return isNumber(event);" placeholder="87654321" required>
                                    </div>
                                    <label for="" class="error" style="display:none;"></label> 
                                    <label>Email</label>
                                    <input type="" name="email" id="email" value="<?php echo $customer->email; ?>" readonly>
                                    <label for="" class="error" style="display:none;"></label> 
                                    
                                    
                                    <label>Rut</label>
                                    <input type="text" id ="rut" name="rut" value="<?php echo $customer->rut; ?>" placeholder="12.345.678-9" required>
                                    <label for="" class="error" style="display:none;"></label> 
                                </div>
                            </div>
                            <!--<div class="col-md-6 col-pass">
                                <h2>Cambiar contraseña</h2>
                                <div class="inputs">
                                    <label>Contraseña actual</label>
                                    <input type="{$formFields['password']['type']}" name="{$formFields['password']['name']}">
                                    <label for="{$formFields['password']['name']}" class="error" style="display:none;"></label> 
                                    <button onclick="cambiarpass()" class="bttn-pass" type="button">
                                    Cambiar Contraseña
                                    </button>
                                    <div id="pass" style="display:none">
                                        <label>Nueva contraseña</label>
                                        <input type="{$formFields['new_password']['type']}" name="{$formFields['new_password']['name']}">
                                        <label>Confirmar contraseña</label>
                                        <input type="password" name="new_password2" autocomplete="off">
                                    </div>
                                </div>
                            </div>-->
                           
                    </div>
                </div>
              
                <div class="col-md-12 col-bttn">
                   
                    
                        <button class="bttn-save" id="enviar" type="submit">Guardar</button>
                        
                    
                </div>
            </div>

        </form>
    </section>
<!--/MI CUENTA-->

</div>

</body>
</html>