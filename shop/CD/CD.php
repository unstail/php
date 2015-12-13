<?php
  namespace shop\CD;
  use shop\Product\Product;

  /**
   *
   */
  class CD extends Product
  {
    private $length; //minutes

    function __construct($author, $price, $size = array(), $length)
    {
      parent::__construct($author, $price, $size);

      $this->length = $length;
    }

    public function getLength() {
      return $this->length;
    }

  }
