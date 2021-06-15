<?php
require_once("./classes/user.php");
require_once("./classes/products.php");
require_once("./classes/creditCard.php");
require_once("./classes/premiumUser.php");



$user = new User ("Gino", "ginomassari@gmail.it","password",25);

$products = new  Products("Smartphone","lorem ipsum gino pup olum nostrum pane gino ustat istat",30);

var_dump($user);
var_dump($products);


?>