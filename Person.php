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

   public function setName($name)
   {
      $this->name = $name;
   }
   public function setLastname($lastname)
   {
      $this->lastname = $lastname;
   }
   public function setAge($age)
   {
      $this->age = $age;
   }
}
