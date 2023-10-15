<?php

class ShoppingCart
{

    private array $orders;

    private discountBundle $discount;

    public function __construct()
    {
       $this->orders = [];   
       $this->discount = DiscountBudleFactory::create();
    }

    public function add(Order $order):void
    {

        $this->orders[] = $order;

        $this->discount->bundle($order);
        $result = $this->discount->getDiscountOrder();
        if($result != null){
            $this->order->add($result);
        }
    }

    public function  getTotal():Total
    {
        $total = new Total(0);
        foreach($this->orders as $order){
            $subTotal = $this->getTotal();
            $total = $subTotal->add($total);
        }
        return $total;

    }
}