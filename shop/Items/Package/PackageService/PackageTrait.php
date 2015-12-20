<?php
namespace shop\Items\Product\PackageService;
use shop\Items\Product\ProductPackageService\ProductPackageInterface;
use shop\User\User;

trait PackageTrait
{

    private $product;
    private $from;
    private $to;

    public function getFrom()
    {
        return $this->from;
    }
    public function getTo()
    {
        return $this->to;
    }
    public function setFrom(User $from)
    {
        $this->from = $from;
        return $this;
    }
    public function setTo(User $to)
    {
        $this->to = $to;
        return $this;
    }
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