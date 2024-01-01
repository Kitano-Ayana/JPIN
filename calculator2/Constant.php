<?php

class Constant implements Expression{

    private int $num;

    public function __construct($num){
        $this->num = $num;
    }

    public function evaluate():int{
        return $this->num;
    }

}