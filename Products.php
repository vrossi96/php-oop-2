<?php
class Products
{
   public $price;
   public $name;
   public $type;

   public function __construct($price, $name, $type)
   {
      $this->price = $price;
      $this->name = $name;
      $this->type = $type;
   }
}
