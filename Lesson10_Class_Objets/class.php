<?php

class Books {
  public $title, $pages, $author;

  function getInfo(){
    return "This book has been written by " . $this->author .
     " and is entitled " . $this->title . ".\n";
  }
}

$my_first_book = new Books();
$my_first_book->title = "Dents du rêve";
$my_first_book->author = "Romain Candusso";
echo $my_first_book->title;
echo "\n". $my_first_book->getInfo();
