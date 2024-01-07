<?php

abstract class UnaryOperator implements Expression{

    public abstract function setOperand(Expression $operand);
    public function isBinaryOperator(){
        return false;
    }

    public function isUnaryOperator(){
        return true;
    }

}