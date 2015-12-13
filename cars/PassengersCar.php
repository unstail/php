<?php

class PassengersCar extends Car
{
    protected $passangers;
    public function __construct($price,$maxSpeed,$color)
    {
        parent::__construct($price,$maxSpeed,$color);
        $this->passangers = array();
    }
    public function addPassanger(Passenger $passenger) {
        if ($passenger->isInCar()) {
            $passenger->leaveCar($this);
            $passenger->sitInCar($this);
        }
        $this->passangers[$passenger->getId()] = $passenger;
    }
    public function removePassanger(Passenger $passenger) {
        unset($this->passangers[$passenger->getId()]);
    }

}