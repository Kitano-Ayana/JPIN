<?php

class QuantityLimit
{

    private Order $limit;

    public function __construct(Item $item,Quantity $limit)
    {
        $this->limit = new Order($item,$limit);
    }

    public function checkOrder(Order $target):void
    {
        

    }
}