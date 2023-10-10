<?php

class Order
{
    private  Quantity $quantity;

    private Item $item;
   
    public function __construct(Item $item, Quantity $quantity)
    {
        if($item == null || $quantity == null){
            throw new IntlException();
        }

        $this->item = $item;
        $this->quantity = $quantity;
    }

    public function getTotal():Total
    {
        $price = $this->item->getPrice()->multi($this->quantity);

        return new Total($price->getAmaount());
    }

}