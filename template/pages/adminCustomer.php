<?php 
ob_start();
session_start();
include '../../includes.php';

if(isset($_SESSION['customer_id']) && $_SESSION['profile_id']==1){
    
    $customers=$customerC->getCustomers();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
  <meta charset="UFT-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  
</head>
<body class="la-barra">
<header id="header">
    <?php include '../_partials/header.php'; ?>
</header>


<section class="container mi-cuenta">
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-cuenta">
                        <ul>
                            <li><a href=""><i class="icon-usuario"></i>Lista de usuarios</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    
                        <div class="cont-cupon">
                            <table>
                                <tr class="head-cupon">
                                  <th>ID Customer</th>
                                  <th>Nombre</th>
                                  <th>Apellido</th>
                                  <th>Rut</th>
                                  <th>Telefono</th>
                                  <th>Email</th>
                                  
                                  <th></th>
                                </tr>
                                <?php foreach($customers as $customer){ ?>
                                  <tr>
                                    <th><?php echo $customer->id_customer;?></th>
                                    <th><?php echo $customer->name;?></th>
                                    <th><?php echo $customer->lastname;?></th>
                                    <th><?php echo $customer->rut;?></th>
                                    <th><?php echo $customer->phone;?></th>
                                    <th><?php echo $customer->email;?></th>
                                  </tr>
                                  <?php } ?>
                            </table>
                            <div id="block-order-detail" class="unvisible">&nbsp;</div>
                        </div>
    
                </div>
            </div>
        </section>
        