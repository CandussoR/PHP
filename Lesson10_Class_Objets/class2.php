<?php
//Adding a constructor to class.

class Book {
  public $author, $title, $pages, $original_language;

  function __construct($author, $title, $language) {
    $this->author = $author;
    $this->title = $title;
    $original_language = $language;
  }

  function getInfo() {
    return "This book has been written by " . $this->author .
     " and is entitled " . $this->title . ".\n";
  }
}

$road = new Book("Cormac McCarthy", "The Road", "English");
echo $road->getInfo();
