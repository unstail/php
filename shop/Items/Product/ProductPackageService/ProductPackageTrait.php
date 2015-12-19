<?php
namespace shop\Items\Product\ProductPackageService\ProductPackageTrait;
use shop\Package\PackageInterface\PackageInterface;

trait ProductPackageTrait
{
    private $package;

    public function getPackage()
    {
        return $this->package;
    }

    public function addToPackage(PackageInterface $package){
        $this->package = $package;
        $package->addProduct($this);
        return $this;
    }

    public function removeFromPackage(){
        $this->package->removeProduct();
        unset($this->package);
        return $this;
    }

}