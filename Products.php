<?php
class Products
{
   public $price;
   public $name;
   public $type;

   public function __construct($price, $name, $type)
   {
      $this->setPrice($price);
      $this->setName($name);
      $this->setType($type);
   }

   private function setPrice($price)
   {
      $this->price = $price;
   }
   public function getPrice()
   {
      return $this->price;
   }

   private function setName($name)
   {
      $this->name = $name;
   }
   public function getName()
   {
      return $this->name;
   }

   private function setType($type)
   {
      $this->type = $type;
   }
   public function getType()
   {
      return $this->type;
   }
}
