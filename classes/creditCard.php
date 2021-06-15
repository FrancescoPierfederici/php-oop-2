<?php
class CreditCard
{
    protected$number;
    protected $cvv;
    



    function __construct($number, $cvv) {
        $this->setNumber($number);
        $this->setCvv($cvv);
        
    }
    public function setNumber($value) {
        $this->number = $value;
    
        
    }
    public function getNumber() {
        return $this->number;
    }
    public function setCvv($value) {
        $this->description = $value;
    
        
    }
    public function getCvv() {
        return $this->cvv;
    }

}
?> 