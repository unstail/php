<?php
namespace shop\Items\Product\Digital\DigitalProduct;
use shop\Items\Product\Product;

abstract class DigitalProduct extends Product
{
    private $length; //minutes

    function __construct($length, $price, $width, $height, $depth)
    {
        parent::__construct($price, $width, $height, $depth);
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }
}