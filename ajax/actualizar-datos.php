<?php
require '../includes.php';
$id_customer = $_POST['id_customer'];
$name      = $_POST['name'];
$lastname    = $_POST['lastname'];
$email       = $_POST['email'];
$phone    = $_POST['phone'];
$rut     = $_POST['rut'];

$customerC = new CustomerController();
$customer= new Customer();

$customer->id_customer=$id_customer;
$customer->name=$name;
$customer->lastname=$lastname;
$customer->email=$email;
$customer->phone=$phone;
$customer->rut=$rut;

$authentication = $customerC->UpdateCustomer($customer);
    if ($authentication==0) {
        $estado = 2;
    } else{
        $estado = 3;
    }



$info['estado']   = $estado;

echo json_encode($info);