<?php

class ItemPrice {

    private int $amaount;

    private ItemCurrency $currency;


    public function __construct(int $amaount, ItemCurrency $currency){

        if($amaount < 0){
            throw new IllegalStateException();
        }

        if( 100000 < $amaount ){
            throw new IllegalStateException();
        }

        $this->amaount = $amaount;
        $this->currency = $currency;
    }

    public function getAmaount()
    {
        return $this->amaount;
    }

    //値オブジェクトを使ってやりたいことは値オブジェクト内に記載をする
    public function multi(Quantity $qty):ItemPrice
    {
        return new ItemPrice($this->amaount * $qty->getAmaount(), $this->currency);
    }
}