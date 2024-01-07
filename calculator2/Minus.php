<?php

require_once 'BinaryOperator.php';
require_once 'NullValue.php';

class Minus extends BinaryOperator{

    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left , Expression $right){
        $this->left = $left;
        $this->right = $right;
    }

    public function setLeft(Expression $left){
        $this->left = $left;
    }

    public function setRight(Expression $right){
        $this->right = $right;
    }

    //式を評価した結果と式を評価した結果をreturnする
    public function evaluate(){

        if($this->left->isNULL() || $this->right->isNULL()){
            throw new Exception();
        }

        return $this->left->evaluate() - $this->right->evaluate();
    }

    public function isNULL()
    {
        return false;
    }

    public static function empty():Minus
    {
        return new Minus(new NullValue(),new NullValue());
    }

    public function isBinaryOperator(){
        return true;
    }

    public function isUnaryOperator(){
        false;
    }
}