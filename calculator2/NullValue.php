<?php

class NullValue implements Expression{


    public function evaluate()
    {
        throw new Exception();
    }

    public function isNULL(){
        return true;
    }

    public function isBinaryOperator(){
        return false;
    }

    public function isUnaryOperator(){
        return false;
    }
}