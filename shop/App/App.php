<?php
namespace shop\App;
use shop\User\User;
use shop\Items\Product\Polygraphy\Book;
use shop\Items\Product\Digital\CD;
use shop\Items\Package\Package;
use shop\Service\Packer;
use shop\Service\Shipper;
class App
{
    public static function run(){

        $packageBook = new Package(15,25,5);
        $packageBook2 = new Package(15,25,5);
        $packageBook3 = new Package(15,25,5);

        $cd = new CD(50, 80, 15, 15, 1);
        $book = new Book('Stephen King', 500, 200, 15, 25, 5);

        $sender = new User("Alex", "Madrid");
        $receiver = new User("Robert", "New-York");

        $pack = new Packer();

        $shipper = new Shipper();

       // echo '<pre>';
        //print_r($receiver);
       // print_r($sender);

        //print_r($cd);
       // print_r($book);

        $packageBook->addProduct($book)
                    ->setFrom($sender)
                    ->setTo($receiver);

        $packageBook2->addProduct($book)
                     ->setFrom($receiver)
                     ->setTo($sender);

        //problem
//        $book->addToPackage($packageBook);
//        $book->addToPackage($packageBook2);

        $pack->addPackage($packageBook)
             ->addPackage($packageBook2);

        //$packageBook->addProduct($book);
        //print_r($pack);



      //  echo '</pre>';

        $shipper->send($pack);
    }
}