<?php

class Quantity
{

    private int $amount;

    public function __construct(int $amount)
    {

        if($amount <= 0 || 100 <= $amount){
            print_r("エラーです。");
        }

        $this->amount = $amount;

    }

    public function getAmaount()
    {
        return $this->amount;
    }

    public function add(Quantity $quantity): Quantity
    {
        return new Quantity($this->amount + $quantity->amount);

    }

    //ターゲットのamountが$this->amountよりお大きければfalseを返す
    //このクラスにgetメソッドを追加してorderで呼び出すという処理はダメ
    public function isLessThan(Quantity $target):bool
    {
        return $this->amount < $target->amount;
    }


}