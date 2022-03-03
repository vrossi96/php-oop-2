<?php
require_once __DIR__ . '/Products.php';

class Foods extends Products
{
   public $expire_date;
   public $canned;

   public function __construct($price, $name, $type, $expire_date, $canned)
   {
      parent::__construct($price, $name, $type);
      $this->setExpireDate($expire_date);
      $this->setIsCanned($canned);
   }

   private function setExpireDate($expire_date)
   {
      $this->expire_date = $expire_date;
   }
   public function getExpireDate()
   {
      return $this->expire_date;
   }

   private function setIsCanned($canned)
   {
      $this->canned = $canned;
   }
   public function getIsCanned()
   {
      return $this->canned;
   }
}
