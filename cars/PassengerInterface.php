<?php
interface PassengerInterface
{
    public function getCarId();
    public function sitInCar(PassengersCar $car);
    public function leaveCar(PassengersCar $car);
}