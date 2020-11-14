<?php
class Customer 
{
     /** @var int $id Customer ID */
     public $id_customer;

     /** @var string Lastname */
     public $lastname;
 
     /** @var string Firstname */
     public $name;
 
     /** @var string Rut */
     public $rut;
 
     /** @var string Birthday (yyyy-mm-dd) */
     public $phone = null;
 
     /** @var string e-mail */
     public $email;

     /** @var int Password */
     public $passwd;

    public function __construct($id = null)
    {
        
    }

  
}


?>
