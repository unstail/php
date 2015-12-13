<?php

class SpeedCar extends Car
{
    const TAX = 0.4;

    public function __construct($price,$maxSpeed,$color)
    {
        parent::__construct($price,$maxSpeed,$color);
        $tax = $color == "red" ? $this->price * (self::TAX + 0.1) : $this->price * self::TAX;
        $this->price = $this->price + $tax;

    }
}