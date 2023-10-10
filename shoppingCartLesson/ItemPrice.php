<?php

class ItemPrice {

    private int $amaount;


    public function __construct(int $amaount){

        if($amaount < 0){
            throw new IllegalStateException();
        }

        if( 100000 < $amaount ){
            throw new IllegalStateException();
        }

        $this->amaount = $amaount;
    }

    public function getAmaount()
    {
        return $this->amaount;
    }
}