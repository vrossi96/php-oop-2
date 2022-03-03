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

   public function setPrice($price)
   {
      $this->price = $price;
   }
   public function setName($name)
   {
      $this->name = $name;
   }
   public function setType($type)
   {
      $this->type = $type;
   }
}
