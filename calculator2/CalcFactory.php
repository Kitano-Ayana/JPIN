<?php

class CalcFactory{

    public static function getInstance(){
        $cal = new Calculator();
        $cal->setAdd(Add::empty());
        $cal->setMinus(Minus::empty());

        return $cal;
    }

}