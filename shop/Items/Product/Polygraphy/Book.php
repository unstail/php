<?php
namespace shop\Items\Product\Polygraphy;
use shop\Items\Product\Polygraphy\PolygraphyProduct;
use shop\Items\Product\ProductPackageService\ProductPackageInterface;
use shop\Items\Product\ProductPackageService\ProductPackageTrait;

/**
   *
   */
  class Book extends PolygraphyProduct implements ProductPackageInterface
  {
    use ProductPackageTrait;

  }
