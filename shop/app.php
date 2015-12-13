<?php
  include('ProductInterface/ProductInterface.php');
  include('Product/Product.php');
  include('Reciver/Reciver.php');
  include('Book/Book.php');
  include('CD/CD.php');
  include('Box/Box.php');
  use shop\Box\Box;
  use shop\CD\CD;
  use shop\Book\Book;
  use shop\Reciver\Reciver;


  $size = array(
      'width' => 20,
      'height' => 40,
      'depth' => 10,
      );
  $size2 = array(
      'width' => 21,
      'height' => 40,
      'depth' => 10,
  );


  $reciver = new Reciver("Robert", "New-York");

  $box = new Box($size);

  $cd = new CD("Alex", 20, $size , 50);

  $box->putProduct($cd)
      ->sendTo($reciver);

  echo '<pre>';
  print_r($box);
  //print_r($cd);




echo '</pre>';