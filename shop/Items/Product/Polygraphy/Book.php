<?php
namespace shop\Items\Product\Polygraphy\Book;
use shop\Items\Product\Polygraphy\PolygraphyProduct\PolygraphyProduct;

  /**
   *
   */
  class Book extends PolygraphyProduct
  {

    function __construct($author, $pages, $price, $width, $height, $depth)
    {
      parent::__construct($author, $pages, $price, $width, $height, $depth);

    }

  }
