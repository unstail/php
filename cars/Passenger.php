<?php
class Passenger implements PassengerInterface
{
    protected $inCar;
    protected $carId;
    private $id;

    public function __construct()
    {
        $this->id  = uniqid();
        $this->inCar = false;
    }

    public function getId()
    {
        return $this->id;
    }

    public function sitInCar(PassengersCar $car)
    {
        if ($this->inCar) {
            $car->addPassanger($this);
        } else {
            $this->inCar = true;
            $this->carId = $car->getId();
            $car->addPassanger($this);
        }
    }

    public function leaveCar(PassengersCar $car)
    {
        $this->inCar = false;
        unset($this->carId);
        $car->removePassenger($this);
    }

    public function getCarId()
    {
        return $this->carId;
    }
    public function isInCar() {
        return $this->inCar;
    }
}