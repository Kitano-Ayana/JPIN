<?php

class QuantityLimit
{

    private Order $limit;
    private QuantityLimit $next;

    public function __construct(Item $item,Quantity $limit)
    {
        $this->limit = new Order($item,$limit);
    }

    //複数のQuantityLimitを繋げることができる
    public function setNext(QuantityLimit $next): QuantityLimit
    {
        $this->next = $next;
        return $next;

    }

    public function check(Order $target): bool
    {
        //注文がリミットを超えたときfalseを返す
        if($this->limit->isLessThan($target))
        {
           return false;
        }

        //数珠繋ぎにQunatityLimitが呼ばれていく
        if($this->next != null)
        {
            $this->next->check($target);
        }
    }
}