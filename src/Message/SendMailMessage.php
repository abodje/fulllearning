<?php

namespace App\Message;

final class SendMailMessage
{
    /*
     * Add whatever properties and methods you need
     * to hold the data for this message class.
     */

     private $name;

     private $email;

     private $description ; 

     public function __construct(string $name,$email,$description)
     {
         $this->name = $name;
     }

    public function getName(): string
    {
        return $this->name;
   }

   public function getEmail(): string
    {
        return $this->email;
   }

   public function getDescription(): string
    {
        return $this->description;
   }
}
