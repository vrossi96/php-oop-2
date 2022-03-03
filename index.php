<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Foods.php';
require_once __DIR__ . '/Games.php';

$prod1 = new Products(32, 'Cuccia', 'Vari');
$prod2 = new Foods(10, 'Tonno', 'Foods', '10/06', true);
$prod3 = new Games(12, 'Corda di lana', 'Games', 'Lana', 'm', false);
var_dump($prod1);
var_dump($prod2);
var_dump($prod3);
