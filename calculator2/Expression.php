<?php

interface Expression {
    public function evaluate();
    public function isNULL();
    public function isBinaryOperator();
    public function isUnaryOperator();
    
}