<?php

class Book{

    private $book;

    public function __construct($chapter){
        $this->book = $chapter;
    }

    public function setBook($book){
        $this->book = $book;
    }

    public function getBook($book){
        return $this->book;
    }
}