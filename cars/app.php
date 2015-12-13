<?php
include "PassengerInterface.php";
include "Car.php";
include "SpeedCar.php";
include "PassengersCar.php";
include "Passenger.php";

$speedCar = new SpeedCar(1000,200,"red");
$passangersCar = new PassengersCar(2000,200,"blue");
$passangersCar2 = new PassengersCar(1500,200,"red");
$passanger = new Passenger();
$passanger2 = new Passenger();

$passangersCar->addPassanger($passanger);
$passangersCar->addPassanger($passanger2);
$passangersCar2->addPassanger($passanger);
//$passangersCar->removePassanger($passanger);

echo "<pre>";
print_r($speedCar);
echo "\n";
print_r($passangersCar);
print_r($passangersCar2);
echo "\n";
print_r($passanger);
print_r($passanger2);
echo "Pass \n";
var_dump($passanger->isInCar());
var_dump($passanger->getCarId());