<?php

class Quantity
{

    private int $amaount;

    public function __construct(int $amaount)
    {

        if($amaount <= 0 || 100 <= $amaount){
            throw new IntlException();
        }

        $this->amaount = $amaount;

    }

    public function getAmaount()
    {
        return $this->amaount;
    }

    public function add(Quantity $quantity): Quantity
    {
        return new Quantity($this->amount + $quantity->amount);

    }
}