<?php


require_once 'Expression.php';

abstract class BinaryOperator implements Expression{

    public abstract function setLeft(Expression $left);
    public abstract function setRight(Expression $right);



    //ここでは共通している型情報だけを継承している
    //Expressionをextendsしたinterfaceでも可能
    //ここを継承クラスにした理由は、isBinaryOperatorと言うメソッドを用意したいこれはtrueを戻ることが決まっていいる


    public function isBinaryOperatory(){
        return true;
    }

    public function isUnaryOperator(){
        return false;
    }

}