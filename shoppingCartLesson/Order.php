<?php

class Order
{
    private  Quantity $quantity;

    private Item $item;

    private OrderType $type;

    private bool $discountApplied = false;
   
    public function __construct(Item $item, Quantity $quantity,OrderType $type = null,QuantityLimit $limit = null)
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
        //itemが違えば、falseを返す
        if($this->item != $target->item){
            return false;
        }

        return $this->quantity->isLessThan($target->quantity);
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
    //    return new Order($this->item,$this->quantity->add($order->quantity));
        return OrderFactory::create($this->item,$this->quantity->add($order->quanatity));
    }

}