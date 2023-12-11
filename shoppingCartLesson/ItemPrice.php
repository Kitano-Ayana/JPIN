<?php

class ItemPrice {

    private int $amount;

   // private ItemCurrency $currency;


    public function __construct(int $amount
    //, ItemCurrency $currency
    ){

        if($amount < 0){
           print_r("数量は0以上のものにしてね〜");
        }

        if( 100000 < $amount ){
            print_r("数量は100000以下のものにしてね〜");
        }

        $this->amount = $amount;
        //$this->currency = $currency;
    }

    public function getAmaount()
    {
        return $this->amount;
    }

    //値オブジェクトを使ってやりたいことは値オブジェクト内に記載をする
    public function multi(Quantity $qty):ItemPrice
    {
        return new ItemPrice($this->amount * $qty->getAmaount());
    }
}