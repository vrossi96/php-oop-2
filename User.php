<?php
class User
{
   public $name;
   public $lastname;
   public $age;
   public $subscribed;
   public $discount;

   public function __construct($name, $lastname, $age, $subscribed)
   {
      $this->setName($name);
      $this->setLastname($lastname);
      $this->setAge($age);
      $this->setIsSubscribed($subscribed);
      $this->setDiscount();
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
   public function setIsSubscribed($subscribed)
   {
      $this->subscribed = $subscribed;
   }
   public function setDiscount()
   {
      $this->discount = $this->subscribed ? 20 : 0;
   }
}
