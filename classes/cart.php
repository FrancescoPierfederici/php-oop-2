  
<?php

class Cart {
  private$user;
  private $products = [];
  private $payment;

  function __construct($user) {
    $this->user = $user;
  }

  public function addProduct($product){
    $this->products[] = $product;
  }
}
?>