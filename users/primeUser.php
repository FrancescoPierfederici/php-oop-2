<?php

require_once(__DIR__ . "../user.php");

class PrimeUser extends User
{

protected $shippingCost = 0;
protected $subscriptionDate;

    function __construction($name,$email,$subscriptionDate = NULL){
        parent::__construct($name,$email);

        if(!isset($subscriptionDate)){
            $subscriptionDate = date("Y-m-d  H:i:s");

        }
        $this->name = "CIAO";
        $this->subscriptionDate = $subscriptionDate;
    }

}
