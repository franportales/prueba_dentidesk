<?php 
ob_start();
session_start();
 
mb_http_output('UTF-8');
if(!$customerC->is_logged_in()){
?>
<div class="menu-bottom">
    <div class="container">
        <div class="nav-logo">
            
            
            <ul class="login-xs">
                <li>
                   <div class="nav-right">
                        <div class="head-login">
                            <form id="login-form-new" action="#" class="head-login__form">
                                <input type="text" id="emailnew" name="emailnew" value="" placeholder="Email">
                                <input type="password" id="passwordnew" name="passwordnew" value="" placeholder="Contraseña">
                                <input type="hidden" name="submitLogin" value="1">
                                <input type="hidden" id="shop" value="{$shop.name}">
                                <button class="btn-ingresar" data-link-action="sign-in" id="loginvarnew">Ingresar</button>
                                <a href="" class="btn-forget">¿Olvidaste tu Contraseña?</a>
                            </form>
                        </div>
        
                    </div>
                </li>
            </ul>
           
        </div>
        
        
    </div>
</div>    
<?php }else{ ?>

    
    <ul class="head-login-nav__items">  
        <li>
            <a class="item-user" id="datosper">
                    <i class="icon-bartender"></i>
                    <span><?php echo $_SESSION['name'];?></span>
            </a>

            
       

            <div class="cuenta-float" id="showdatosper">

                <div class="cuenta-float__col-type"></div>

                <div class="cuenta-float__col-nav">
                    <ul>
                        <li><a href="<?php echo Ruta; ?>template/pages/my-account.php">Datos personales</a></li>
                        <?php if($_SESSION['profile_id']==1){ ?>
                        <li><a href="<?php echo Ruta; ?>template/pages/adminCustomer.php">Administrar usuarios Usuarios</a></li>
                        <li><a href="<?php echo Ruta; ?>template/pages/addCustomer.php">Agregar Usuarios</a></li>
                        <?php }?>
                        <li><a href="<?php echo Ruta; ?>template/logout.php">Salir</a></li>
                    </ul>
                </div>								
            </div>
        </li>	
    </ul>

<?php

} ?>