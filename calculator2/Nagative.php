<?php

class Negative implements Expression{

    private int $num;

    public function __construct(int $num){
        parent::__construct();
        $this->num = $num;
    }

    public function evaluate():int{
        return -$this->num;
    }
}