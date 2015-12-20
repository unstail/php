<?php
namespace shop\Items\Product\Polygraphy;
use shop\Items\Product\Product;

abstract class PolygraphyProduct extends Product
{
    private $pages; //minutes
    private $author;

    function __construct($author, $pages, $price, $width, $height, $depth)
    {
        parent::__construct($price, $width, $height, $depth);
        $this->pages = $pages;
        $this->author = $author;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}