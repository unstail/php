<?php
namespace shop\Service;

class Shipper
{

    public function sendTo(User $reciver)
    {
        if (isset($this->product)) {
            echo "Successfully sent to " . $reciver->getAddress();
        } else {
            echo "Fatal error";
        }
    }
}