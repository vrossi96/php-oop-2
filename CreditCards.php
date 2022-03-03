<?php
class CreditCards
{
   public $number;
   public $validity;
   public $balance;

   public function __construct($number, $validity, $balance)
   {
      $this->setNumber($number);
      $this->setValidity($validity);
      $this->setBalance($balance);
   }

   public function setNumber($number)
   {
      $this->number = $number;
   }
   public function setValidity($validity)
   {
      $this->validity = $validity;
   }
   public function setBalance($balance)
   {
      $this->balance = $balance;
   }
}
