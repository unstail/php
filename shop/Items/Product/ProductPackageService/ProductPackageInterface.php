<?php
namespace shop\Product\ProductPackageInterface\ProductPackageInterface;
use shop\Package\PackageInterface\PackageInterface;

interface ProductPackageInterface
{
    public function getPackage();
    public function addToPackage(PackageInterface $package);
    public function removeFromPackage();
}