<?php
require_once(__DIR__ . "./user.php");

class PremiumUser extends User
{
    protected $sconto;



    public function setSconto($eta){
        if ($eta > 60){
            $this->sconto = 50;
        }

    }
}
?>