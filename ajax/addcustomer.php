<?php
require '../includes.php';
$id_customer = $_POST['id_customer'];
$name      = $_POST['nombre'];
$lastname    = $_POST['apellido'];
$email       = $_POST['email'];
$password       = $_POST['password'];
$phone    = $_POST['telefono_celular'];
$rut     = $_POST['rut'];

$customerC = new CustomerController();
$customer= new Customer();

$customer->id_customer=$id_customer;
$customer->name=$name;
$customer->lastname=$lastname;
$customer->email=$email;
$customer->passwd=md5($password);
$customer->phone=$phone;
$customer->rut=$rut;

$authentication = $customerC->insertCustomer($customer);
    if ($authentication==0) {
        $estado = 2;
    } else{
        $estado = 3;
    }



$info['estado']   = $estado;

echo json_encode($info);