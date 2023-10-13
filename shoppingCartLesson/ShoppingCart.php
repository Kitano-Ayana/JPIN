<?php

class ShoppingCart
{

    private Order $order;

    private Total $total;

    public function __construct(Order $order, Total $total)
    {
        if($order == NULL || $total == NULL){
            return new IllegalStateException();
        }

        $this->order = $order;
    }

    public function addCart(Order $order)
    {
        $this->order->add($order);
    }

    public function  getTotal():Total
    {
        foreach($this->order as $value){
            $total = $this->order->getTotal()->add($total);

        }

    }
}