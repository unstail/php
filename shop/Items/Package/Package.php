<?php
namespace shop\Items\Package;
use shop\Items\Package\PackageService\PackageInterface;
use shop\Items\Product\PackageService\PackageTrait;
/**
 *
 */
class Package implements PackageInterface
{
    use PackageTrait;

    private $id;
    private $width;
    private $height;
    private $depth;

    function __construct($width, $height, $depth)
    {

        $this->id = uniqid();
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDepth()
    {
        return $this->depth;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }

}
