<?php
  namespace shop\Items\Product\Digital;
  use shop\Items\Product\Digital\DigitalProduct;
  use shop\Items\Product\ProductPackageService\ProductPackageInterface;
  use shop\Items\Product\ProductPackageService\ProductPackageTrait;

  /**
   *
   */
  class CD extends DigitalProduct implements ProductPackageInterface
  {
    use ProductPackageTrait;

  }
