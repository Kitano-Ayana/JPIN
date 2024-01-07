<?php

class Page{

    private $page;

    public function __construct($page){
        $this->page = $page;
    }

    public function setPage($page){
        $this->page = $page;
    }

    public function getPage($page){
        return $this->page;
    }
}