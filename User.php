<?php
require_once __DIR__ . '/CreditCards.php';
require_once __DIR__ . '/Person.php';
class User extends Person
{
   public $subscribed;
   public $discount;
   public $credit_card;
   public $cart;

   public function __construct($name, $lastname, $age, $subscribed, $credit_card, $cart)
   {
      parent::__construct($name, $lastname, $age);
      $this->setIsSubscribed($subscribed);
      $this->setDiscount();
      $this->setCreditCard($credit_card);
      $this->setCart($cart);
   }

   public function setIsSubscribed($subscribed)
   {
      $this->subscribed = $subscribed;
   }
   public function setDiscount()
   {
      $this->discount = $this->subscribed ? 20 : 0;
   }
   public function setCreditCard($credit_card)
   {
      if (!$credit_card instanceof CreditCards) return false;
      $this->credit_card = $credit_card;
   }
   public function setCart($cart)
   {
      foreach ($cart as $prodkey => $product) {
         if (!$product instanceof Products) {
            unset($cart[$prodkey]);
         }
      }
      $this->cart = $cart;
   }
}
