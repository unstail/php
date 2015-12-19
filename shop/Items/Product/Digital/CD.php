<?php
  namespace shop\Items\Product\Digital\CD;
  use shop\Items\Product\Digital\DigitalProduct\DigitalProduct;
  use shop\Product\ProductPackageInterface\ProductPackageInterface\ProductPackageInterface;
  use shop\Items\Product\ProductPackageService\ProductPackageTrait\ProductPackageTrait;

  /**
   *
   */
  class CD extends DigitalProduct implements ProductPackageInterface
  {
    use ProductPackageTrait;

  }
