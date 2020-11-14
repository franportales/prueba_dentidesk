<?php
session_start();
class CustomerController 
{

    public function getByEmail($email, $password)
    {
        
       
        $sql =  "SELECT c.*, p.id_profile FROM  customer  c
                join customer_profile cp on c.id_customer=cp.id_customer
                join profile p on p.id_profile=cp.id_profile WHERE c.email ='".$email."' AND c.password ='".$password."'";
        
        $custom = $GLOBALS['bd_central']->getResultSelect($sql);
        $custom=$custom[0];

        if(count($custom)>0){
            
            $_SESSION['customer_id']=$custom->id_customer;
            $_SESSION['name']=$custom->name." ".$custom->lastname; 
            $_SESSION['profile_id']=$custom->id_profile; 
            return 1;
        }
        return 0;
        
    }



    public function getCustomer($id_customer)
    {
        
       
        $sql =  "SELECT * FROM customer WHERE id_customer =".$id_customer;
        
        $custom = $GLOBALS['bd_central']->getResultSelect($sql);
        if(count($custom)>0){
            $customer= new Customer();
            $customer->id_customer=$custom[0]->id_customer;
            $customer->name=$custom[0]->name;
            $customer->lastname=$custom[0]->lastname;
            $customer->email=$custom[0]->email;
            $customer->passwd=$custom[0]->password;
            $customer->phone=$custom[0]->phone;
            $customer->rut=$custom[0]->rut;
            
            return $customer;
        }
        return 0;
        
    }

    public function getCustomers()
    {
        
       
        $sql =  "SELECT * FROM customer ";
        $custom = array();
        $customers = $GLOBALS['bd_central']->getResultSelect($sql);
        if(count($customers)>0){
            foreach($customers as $customer_tg){
            $customer= new Customer();
            $customer->id_customer=$customer_tg->id_customer;
            $customer->name=$customer_tg->name;
            $customer->lastname=$customer_tg->lastname;
            $customer->email=$customer_tg->email;
            $customer->passwd=$customer_tg->password;
            $customer->phone=$customer_tg->phone;
            $customer->rut=$customer_tg->rut;
            array_push($custom,$customer);
            }
            return $custom;
        }
        return 0;
        
    }

    public function insertCustomer($customer)
    {
        $sql = "INSERT INTO customer (name,lastname,email,password,phone,rut) VALUES ('".$customer->name."','".$customer->lastname."','".$customer->email."', '".$customer->passwd."',".$customer->phone.", '".$customer->rut."')";
        //var_dump($sql);
        $custom = $GLOBALS['bd_central']->getResultUpInDe($sql);
        return $custom;
    }

    public function UpdateCustomer($customer)
    {
        
       
        $sql =  "UPDATE customer SET name='".$customer->name."', lastname='".$customer->lastname."', phone =".$customer->phone.", rut ='".$customer->rut."' WHERE id_customer =".$customer->id_customer;
        //var_dump($sql);
        $custom = $GLOBALS['bd_central']->getResultUpInDe($sql);
        
        return $custom;
        
    }

    // Check if the user is already logged in
    public function is_logged_in() {
        // Check if user session has been set
        if (isset($_SESSION['customer_id'])) {
            return true;
        }
    }

}
