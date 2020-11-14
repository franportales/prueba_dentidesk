<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
require 'config.php';

require 'controller/DB.php';
require 'controller/CustomerController.php';

require 'models/Customer.php';


$customerC= new CustomerController();
