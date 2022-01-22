<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

 class PhoneSubscriber
 {
     /** @var int */
     private $subscriberId;

     /** @var int */
     private $address;

     /** @var int */
     private $phoneNumber;

     /** @var int */
     private $baseRate;

     public function calculateBill(): int
     {
         $sessions = CallHistory::getCurrentCalls($this->subscriberId);
         $totalDuration = array_reduce($sessions, function (int $sum, Call $call) {
             return $sum += $call->getDuration();
         });

         return $totalDuration * $this->baseRate / 100;
     }

     /**
      * Get the value of baseRate.
      */
     public function getBaseRate()
     {
         return $this->baseRate;
     }

     /**
      * Set the value of baseRate.
      *
      * @return  self
      */
     public function setBaseRate($baseRate)
     {
         $this->baseRate = $baseRate;

         return $this;
     }

     /**
      * Get the value of phoneNumber.
      */
     public function getPhoneNumber()
     {
         return $this->phoneNumber;
     }

     /**
      * Set the value of phoneNumber.
      *
      * @return  self
      */
     public function setPhoneNumber($phoneNumber)
     {
         $this->phoneNumber = $phoneNumber;

         return $this;
     }

     /**
      * Get the value of address.
      */
     public function getAddress()
     {
         return $this->address;
     }

     /**
      * Set the value of address.
      *
      * @return  self
      */
     public function setAddress($address)
     {
         $this->address = $address;

         return $this;
     }

     /**
      * Get the value of subscriberId.
      */
     public function getSubscriberId()
     {
         return $this->subscriberId;
     }

     /**
      * Set the value of subscriberId.
      *
      * @return  self
      */
     public function setSubscriberId($subscriberId)
     {
         $this->subscriberId = $subscriberId;

         return $this;
     }
 }
