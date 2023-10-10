<?php


class Total
{

    private int $amaount;

    public function __construct($amaount)
    {

        if($amaount == NULL){
            throw new IntlException();
        }

        if(10000 < $amaount ){
            throw new IntlException();
        }

    }

    public function getTotal()
    {
        return $this->amaount;
    }
}