<?php
  namespace shop\Box;
  use shop\ProductInterface\ProductInterface;
  use shop\Reciver\Reciver;
  /**
   *
   */
  class Box
  {
    private $size; //minutes
    private $id;
    private $product;

    function __construct($size = array())
    {
      $this->id = uniqid();
      $this->size = $size;
    }

    public function getSize() {
      return $this->size;
    }

    public function getProduct()
    {
      return $this->product;
    }
    public function putProduct(ProductInterface $product) {
      if (
          $this->size['width'] >= $product->getSize('width') &&
          $this->size['height'] >= $product->getSize('height') &&
          $this->size['depth'] >= $product->getSize('depth')
          ) {
        $this->product = $product;
        $product->putInBox($this);
        return $this;
      } else {
        echo "Can't put product to box. Wrong size.";
      }

    }

    public function removeProduct(ProductInterface $product) {
      $product->removeFromBox($this);
      unset($this->product);
      return $this;
    }

    public function sendTo(Reciver $reciver)
    {
      if (isset($this->product)) {
        echo "Successfully sent to " . $reciver->getAddress();
      } else {
        echo "Fatal error";
      }
    }
  }
