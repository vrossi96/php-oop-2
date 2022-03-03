<?php
require_once __DIR__ . '/Products.php';

class Games extends Products
{
   public $material;
   public $size;
   public $edible;

   public function __construct($price, $name, $type, $material, $size, $edible)
   {
      parent::__construct($price, $name, $type);
      $this->setMaterial($material);
      $this->setSize($size);
      $this->setIsEdible($edible);
   }

   public function setMaterial($material)
   {
      $this->material = $material;
   }
   public function setSize($size)
   {
      $this->size = $size;
   }
   public function setIsEdible($edible)
   {
      $this->edible = $edible;
   }
}
