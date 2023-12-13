<?php

require_once 'Execute.php';
class Add implements Execute
{
    public function execute($number1,$number2)
    {
        return $number1 + $number2;
    }
}