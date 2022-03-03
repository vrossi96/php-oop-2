<?php
/* require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Foods.php';
require_once __DIR__ . '/Games.php'; */

require_once __DIR__ . '/CreditCards.php';
require_once __DIR__ . '/Person.php';
class User extends Person
{
   public $subscribed;
   public $discount;
   public $credit_card;
   public $cart;
   public $money_left;

   public function __construct($name, $lastname, $age, $subscribed, $credit_card, $cart)
   {
      parent::__construct($name, $lastname, $age);
      $this->setIsSubscribed($subscribed);
      $this->setDiscount();
      $this->setCreditCard($credit_card);
      $this->setCart($cart);
      $this->money_left = $this->setMoneyLeft($credit_card, $cart);
   }

   public function setIsSubscribed($subscribed)
   {
      $this->subscribed = $subscribed;
   }
   // Controllo se iscritto allora applico sconto
   public function setDiscount()
   {
      $this->discount = $this->subscribed ? 20 : 0;
   }
   public function getDiscount()
   {
      return $this->discount;
   }
   // Controllo se la carta di credito sia un istanza della classe CreditCards
   public function setCreditCard($credit_card)
   {
      if (!$credit_card instanceof CreditCards) return false;
      $this->credit_card = $credit_card;
   }
   // Controllo se i prodotti messi nel carrello siano istanze della classe e/o classi derivate di Products
   public function setCart($cart)
   {
      foreach ($cart as $prodkey => $product) {
         if (!$product instanceof Products) {
            unset($cart[$prodkey]);
         }
      }
      $this->cart = $cart;
   }
   // Controllo validità Carta di Credito, se valida si calcolano i soldi rimanenti
   public function setMoneyLeft($credit_card, $cart)
   {
      if (!$credit_card->validity) return 'Carta di Credito scaduta';
      $actual_money = $credit_card->getBalance();
      foreach ($cart as $product) {
         if ($product instanceof Products) {
            if ($this->getDiscount()) {
               $actual_money -= $product->getPrice() * 0.8;
            } else $actual_money -= $product->getPrice();
         }
      }
      return $actual_money;
   }
}
