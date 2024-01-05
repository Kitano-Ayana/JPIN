<?php

class Root extends UnaryOperator{

    private Expression $operand;

    public function __construct(int $num){
        parent::__construct();
        $this->operand = $num;
    }

    public function evaluate():int{
        return sqrt($this->operand->evaluate());
    }

    public function setOperand(Expression $operand){
        $this->setOperand = $operand;
    }

    public function isNull(){
        return false;
    }

    public function isBinaryOperator(){
        return false;
    }

    public function isUnaryOperator(){
        return false;
    }
}