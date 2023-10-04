<?php

class ShoppingCart
{

    private $item;

    private $quantity;

    public function __construct(Item $item, int $quantity)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }

    

}