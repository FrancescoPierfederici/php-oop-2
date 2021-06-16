<?php

// require_once(__DIR__ . "/../traits/logger.php");

class AgeValid extends Exception {


  private $defaultAgeMessage = "Devi inserire un numero";

  function __construct($message = is_numeric()) {
    if(empty($message)){
      $message = $this->defaultAgeMessage;
    }

  
  }
}
?>