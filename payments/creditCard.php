<?php

require_once(__DIR__ . "/../payment.php");

class CreditCard extends Payment {
  protected $number;
  protected $expiration;
  protected $cvv;

  function __construct($number, $expiration, $cvv) {
    $this->number = $number;
    $this->cvv = $cvv;

    $this->setExpiration($expiration);
  }

  public function setExpiration($value) {
    $date = date_create_from_format("m/Y", $value);

    $this->expiration = $date;
  }

  public function getExpiration() {
    return date_format($this->expiration, "m/Y");
  }
}
?>