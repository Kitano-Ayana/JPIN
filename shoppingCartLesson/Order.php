<?php

class Order
{
    private  Quantity $quantity;

    private Item $item;

    private OrderType $type;
   
    public function __construct(Item $item, Quantity $quantity,OrderType $type = null)
    {
        if($item == null || $quantity == null){
            throw new IntlException();
        }

        $this->item = $item;
        $this->quantity = $quantity;
        $this->type = $type ?? OrderType::DEBIT;
    }

    public function getTotal():Total
    {
        $price = $this->item->getPrice()->multi($this->quantity);

        return new Total($this->item->getPrice()->getAmaount(),$this->type);
    }

    public isSameItem(Item $item):boolean
    {
        return $this->item->equals($item);
    }

}