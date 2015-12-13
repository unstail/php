<?php
namespace shop\Reciver;
/**
 *
 */
class Reciver
{
    private $name;
    private $address;

    public function __construct($name,$address)
    {
        $this->address = $address;
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }
}