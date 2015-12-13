<?php
namespace shop\ProductInterface;
use shop\Box\Box;

interface ProductInterface
{
  public function putInBox(Box $box);
  public function removeFromBox();
  public function getSize($param);
}
