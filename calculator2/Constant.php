<?php

require_once 'Expression.php';

class Constant implements Expression{

    private int $num;

    public function __construct($num){
        $this->num = $num;
    }

    public function evaluate():int{
        return $this->num;
    }

    public function isNull(){
        return false;
    }

    public function isBinaryOperator():bool{
        return false;
    }

    public function isUnaryOperator(){
        return false;
    }



}