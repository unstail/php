<?php
namespace shop\Items\Package\PackageService;
use shop\Items\Product\ProductPackageService\ProductPackageInterface;

interface PackageInterface
{
  public function getProduct();
  public function hasProduct();
  public function addProduct(ProductPackageInterface $product);
  public function removeProduct();

}
