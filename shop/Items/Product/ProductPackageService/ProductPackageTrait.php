<?php
namespace shop\Items\Product\ProductPackageService;
use shop\Items\Package\PackageService\PackageInterface;

trait ProductPackageTrait
{
    private $package;

    public function getPackage()
    {
        return $this->package;
    }
    public function isInPackage() {
        return isset($this->package);
    }

    public function addToPackage(PackageInterface $package){
        $this->package = $package;

        if ($package->hasProduct()) $package->addProduct($this);
        return $this;
    }

    public function removeFromPackage(){
        $package = $this->package;
        $this->package = null;

        if ($package instanceof PackageInterface && $package->hasProduct()) $package->removeProduct();

        return $this;
    }

}