<?php

class Add implements Expression{

    private Expression $a;
    private Expression $b;

    public function __construct(Expression $a , Expression $b){
        $this->a = $a;
        $this->b = $b;
    }

    //式を評価した結果と式を評価した結果をreturnする
    public function evaluate(){
        return $this->a->evaluate() + $this->b->evaluate();
    }
}