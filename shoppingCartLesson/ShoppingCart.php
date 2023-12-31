<?php

require_once 'DiscountBundleFactory.php';
require_once 'DiscountBundle.php';

class ShoppingCart
{

    private array $orders;

    private discountBundle $discount;

    public function __construct()
    {
       $this->orders = [];   
       $this->discount = DiscountBundleFactory::create();
    }

    public function add(Order $order):void
    {

        $this->orders[] = $order;

       $this->discount->bundle($order);
        $result = $this->discount->getDiscountOrder();
        if($result != null){
            $this->orders[] = $result;
        }
    }

    public function  getTotal():Total
    {
        $total = new Total(0);
        foreach($this->orders as $order){
            $subTotal = $order->getTotal();
            $total = $subTotal->add($total);
        }
        return $total;

    }
}