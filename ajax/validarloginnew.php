<?php
require '../includes.php';
ini_set('display_errors', '1');

ini_set('memory_limit','2048M');
ini_set('max_input_vars','10000');

$email  = $_POST['email'];
$pass   = $_POST['pass'];
$estado = 0;

$customer = new CustomerController();
$info     = array();


    $authentication = $customer->getByEmail(trim($email), trim(md5($pass)));
    if ($authentication==0) {
        $estado = 2;
    } else{
        $estado = 3;
    }



$info['estado']   = $estado;

echo json_encode($info);

?>