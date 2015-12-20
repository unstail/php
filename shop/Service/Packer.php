<?php
namespace shop\Service;

use shop\Items\Package\PackageService\PackageInterface;

class Packer
{
    private $packages;
    public function __construct()
    {
        $this->packages = array();
    }

    public function addPackage(PackageInterface $package)
    {

    }
}