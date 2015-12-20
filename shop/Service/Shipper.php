<?php
namespace shop\Service;


class Shipper
{

    public function send(Packer $packerCollection)
    {
        $packs = $packerCollection->getPackages();
        foreach ($packs as $pack) {
            echo "Successfully sent to " .$pack->getTo()->getName() . ' - ' .$pack->getTo()->getAddress() . " from " . $pack->getFrom()->getName() . " - " . $pack->getFrom()->getAddress() . "\n";
        }
    }
}