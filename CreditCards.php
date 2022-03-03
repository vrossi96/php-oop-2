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

   private function setNumber($number)
   {
      $this->number = $number;
   }
   public function getNumber()
   {
      return $this->number;
   }

   private function setValidity($validity)
   {
      $this->validity = $validity;
   }
   public function getValidity()
   {
      return $this->validity;
   }

   private function setBalance($balance)
   {
      $this->balance = $balance;
   }
   public function getBalance()
   {
      return $this->balance;
   }
}
