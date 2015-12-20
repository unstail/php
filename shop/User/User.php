<?php
namespace shop\User;

class User
{
    private $id;
    private $name;
    private $address;

    public function __construct($name,$address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->id = uniqid();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getId()
    {
        return $this->id;
    }

}