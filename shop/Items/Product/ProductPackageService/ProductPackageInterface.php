<?php
namespace shop\Items\Product\ProductPackageService;
use shop\Items\Package\PackageService\PackageInterface;

interface ProductPackageInterface
{
    public function getPackage();
    public function isInPackage();
    public function addToPackage(PackageInterface $package);
    public function removeFromPackage();
}