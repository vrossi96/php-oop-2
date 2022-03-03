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

   private function setMaterial($material)
   {
      $this->material = $material;
   }
   public function getMaterial()
   {
      return $this->material;
   }

   private function setSize($size)
   {
      $this->size = $size;
   }
   public function getSize()
   {
      return $this->size;
   }

   private function setIsEdible($edible)
   {
      $this->edible = $edible;
   }
   public function getIsEdible()
   {
      return $this->edible;
   }
}
