<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Foods.php';
require_once __DIR__ . '/Games.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/CreditCards.php';

$prod1 = new Products(32, 'Cuccia', 'Vari');
$prod2 = new Foods(10, 'Tonno', 'Foods', '10/06', true);
$prod3 = new Games(12, 'Corda di lana', 'Games', 'Lana', 'm', false);
/* var_dump($prod1);
var_dump($prod2);
var_dump($prod3);
var_export($prod3 instanceof Products); */

$card1 = new CreditCards(rand(333, 9563), true, 350);
$card2 = new CreditCards(rand(333, 9563), false, 950);

$user1 = new User('Turtle', 'Spiaggia', 33, true, $card1, [$prod2, $prod3, $prod3]);
$user2 = new User('Papera', 'Zincata', 15, false, $card2, [$prod3, 'Chiave', 'Acciuga', $prod1]);
var_dump($user1);
var_dump($user2);
