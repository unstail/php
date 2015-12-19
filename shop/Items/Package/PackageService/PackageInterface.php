<?php
namespace shop\Package\PackageInterface;
use shop\Product\ProductPackageInterface\ProductPackageInterface\ProductPackageInterface;

interface PackageInterface
{
  public function getProduct();
  public function addProduct(ProductPackageInterface $product);
  public function removeProduct();

}
