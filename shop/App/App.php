<?php
namespace shop\App;
use shop\User\User;
use shop\Items\Product\Polygraphy\Book\Book;
use shop\Items\Product\Digital\CD\CD;
use shop\Box\Package;
class App
{
    public static function run(){

        $packageBook = new Package(15,25,5);

        $cd = new CD(50, 80, 15, 15, 1);
        $book = new Book('Stephen King', 500, 200, 15, 25, 5);

        $sender = new User("Alex", "Madrid");
        $receiver = new User("Robert", "New-York");

        echo '<pre>';
        print_r($receiver);
        print_r($sender);

        print_r($cd);
        print_r($book);



        print_r($packageBook);



        echo '</pre>';
    }
}