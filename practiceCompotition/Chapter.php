<?php

class Chapter{

    private $chapter;

    public function __construt($page){
            $this->chapter[] = $page;
    }

    public function setChapter($chapter){
        return $this->chapter;
    }

}