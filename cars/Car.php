<?php

class Car
{
    protected $price;
    protected  $maxSpeed;
    protected $color;
    private $id;

    public function __construct($price,$maxSpeed,$color)
    {
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->price = $price;
        $this->id = uniqid();
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getId()
    {
        return $this->id;
    }
}