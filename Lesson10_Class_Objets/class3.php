<?php

class Document {
  public $type, $pages, $is_filled;

  function getInfo() {
    return "This document is a " . $this->type . ".\n";
  }
}

class Book extends Document {
  public $genre;

  function __construct($genre) {
    $this->type = "book";
    $this->genre = $genre;
  }

  function getInfo() {
    return parent::getInfo() . "More precisely, it's a " . $this->genre . ".\n";
  }
}

$a_book = new Book("novel");
echo $a_book->getInfo();
