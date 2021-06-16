<?php

// provate ad immaginare quali sono le classi necessarie per creare uno shop online;
// ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).





require_once "./classes/products/smartphoneProduct.php";
require_once "./classes/users/primeUser.php";
require_once "./classes/user.php";
require_once "./classes/payments/creditCard.php";
require_once "./classes/cart.php";

$user = new PrimeUser("Mario Rossi", "mario.rossi@gmail.com");
$cart = new Cart($user);
$creditCard = new CreditCard(6546543213, "01/2025", 847);

var_dump($creditCard->getExpiration());

$iphone12 = new SmartphoneProduct("iPhone", 1, 980, "12 Pro", "Apple");
$xiaomi10 = new SmartphoneProduct("redmi", 1, 560, "10 Max", "Xiaomi");

$cart->addProduct($iphone12);
$cart->addProduct($xiaomi10);

var_dump($cart);


?>