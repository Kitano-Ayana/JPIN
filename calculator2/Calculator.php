<?php

require_once 'Constant.php';
require_once 'Expression.php';
require_once 'Add.php';
require_once 'Minus.php';
require_once 'OperantType.php';

class Calculator{

    private OperatorType $type;
    private Expression $add;

    private Expression $minus;

    private Expression $current;
    private int $left;
    private int $right;


    public function setType(OperatorType $type){
        $this->type = $type;
        if($type == OperatorType::ADD){
            $this->current = $this->add;
        }else if($type == OperatorType::MINUS){
            $this->current = $this->minus;
        }
    }

    public function getResult(){
        if($this->type == OperatorType::ADD || $this->type == OperatorType::MINUS){
            $this->current->setLeft(new Constant($this->left));
            $this->current->setRight(new Constant($this->right));
        }

        $result = $this->current->evaluate();

        print_r($result);

        return $result;
    }

    //これでもいいけどなんか同じこと繰り返してる
    // public function getResult(){
    //     if($this->type == OperatorType::ADD){
    //         $op = $this->add;
    //         $op->setLeft(new Constant($this->left));
    //         $op->setRight(new Constant($this->right));
    //     }else if($this->type == OperatorType::MINUS){
    //         $op = $this->minus;
    //         $op->setLeft(new Constant($this->left));
    //         $op->setRight(new Constant($this->right));
    //     }
    // }

    public function setAdd(Expression $add){
        $this->add = $add;
    }

    public function setMinus(Expression $minus){
        $this->minus = $minus;
    }

    public function setLeft(int $left){
        $this->left = $left;
    }

    public function setRight(int $right){
        $this->right = $right;
    }

}