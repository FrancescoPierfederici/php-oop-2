  
<?php

/* class PrimeSubscriuption{
} */

class User {
  protected $name;
  protected $email;
  protected $primeSubscription;


  function __construct($name, $email, $primeSubscription=NULL) {
    $this->name = $name;
    $this->email = $email;
  }

  public function setPrime($primeSubscription){
    $this->primeSubscription = $primeSubscription;
  }
}
?>
/* 
$user = new User("", "");
$user->setPrime(new PrimeSubscriuption()); */
