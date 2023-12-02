<?php

class Order
{
    private  Quantity $quantity;

    private Item $item;

    private OrderType $type;

    private bool $discountApplied = false;
   
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

    public function isLessThan(Order $target)
    {
        return false;
    }

    public function isMoreThan(Order $target)
    {
        return false;
    }

    public function isDiscountApplied(): bool {
        return $this->discountApplied;
    }

    public function add(Order $order):Order
    {
        if(! $this->item = $order->item){
            throw new IntlException();
        }
        // new OrderするとComon〜〜が入らないのでFacotryを使う ひとまずJavaの書き方で
        return OrderFactory.create(
            $this->item,
            $this->quantity->add($order->quantity));

    }

}