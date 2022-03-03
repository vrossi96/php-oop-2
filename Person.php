<?php

class Person
{
   public $name;
   public $lastname;
   public $age;

   public function __construct($name, $lastname, $age)
   {
      $this->setName($name);
      $this->setLastname($lastname);
      $this->setAge($age);
   }

   private function setName($name)
   {
      $this->name = $name;
   }
   public function getName()
   {
      return $this->name;
   }

   private function setLastname($lastname)
   {
      $this->lastname = $lastname;
   }
   public function getLastname()
   {
      return $this->lastname;
   }

   private function setAge($age)
   {
      $this->age = $age;
   }
   public function getAge()
   {
      return $this->age;
   }
}
