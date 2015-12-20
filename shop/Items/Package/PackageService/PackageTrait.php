<?php
namespace shop\Items\Product\PackageService;
use shop\Items\Product\ProductPackageService\ProductPackageInterface;

trait PackageTrait
{

    private $product;

    public function getProduct()
    {
        return $this->product;
    }
    public function hasProduct(){
        return isset($this->product);
    }
    public function addProduct(ProductPackageInterface $product){
        $product->removeFromPackage();
        $product->addToPackage($this);
        $this->product = $product;
        return $this;
    }
    public function removeProduct(){
        $product = $this->product;
        $this->product = null;

        if ($product instanceof ProductPackageInterface && $product->isInPackage()) $product->removeFromPackage();
        return $this;
    }


}