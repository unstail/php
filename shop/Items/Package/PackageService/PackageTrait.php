<?php
namespace shop\Items\Product\PackageService\PackageTrait;
use shop\Product\ProductPackageInterface\ProductPackageInterface\ProductPackageInterface;

trait PackageTrait
{

    private $product;

    public function getProduct()
    {
        return $this->product;
    }

    public function addProduct(ProductPackageInterface $product){
        $this->product = $product;
        $product->addToPackage($this);
        return $this;
    }
    public function removeProduct(){
        $this->product->removeFromPackage();
        unset($this->product);
        return $this;
    }


}