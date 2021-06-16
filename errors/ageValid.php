<?php

// require_once(__DIR__ . "/../traits/logger.php");

class AgeValid extends Exception {


  private $defaultAgeMessage = "Devi inserire un numero";

  function __construct($message) {
    if(!is_numeric($message)){
      $message = $this->defaultAgeMessage;
    }

  
  }
}
?>