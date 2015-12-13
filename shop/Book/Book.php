<?php
  namespace shop\Book;
  use shop\Product\Product;

  /**
   *
   */
  class Book extends Product
  {
    private $pages;

    function __construct(stirng $author, float $price, $size = array(), int $pages)
    {
      parent::__construct($author, $price, $size);

      $this->pages = $pages;
    }

    public function getPages() {
      return $this->pages;
    }

  }
