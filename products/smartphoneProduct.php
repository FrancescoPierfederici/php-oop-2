<?php

require_once(__DIR__ . "/../product.php");

class SmartphoneProduct extends Product {
  protected $model;
  protected $brand;
  // banda 4g / 5g / 6g
  protected $band = "4g";

  function __construct($name, $qty, $price, $model, $brand) {
    parent::__construct($name, $qty, $price);

    $this->model = $model;
    $this->brand = $brand;
  }
}
?>