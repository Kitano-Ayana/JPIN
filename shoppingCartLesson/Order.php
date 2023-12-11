<?php

require_once 'QuantityLimit.php';
require_once 'OrderType.php';
require_once 'Total.php';

class Order
{
    private  Quantity $quantity;

    private Item $item;

    private ?string $type;
   
   public function __construct(Item $item, Quantity $quantity, ?string $type = null, QuantityLimit $limit = null)
   {
        if($item == null || $quantity == null){
            throw new IntlException();
        }

        $this->item = $item;
        $this->quantity = $quantity;


        if ($limit !== null ) {

            var_dump("pass");
            $result = $limit->check($this);
            var_dump($result);

            if(!$result){
                print_r("Order exceeds quantity limits");
            }
        }

        $this->type = $type ?? OrderType::DEBIT;
       
    }

    public function getTotal():Total
    {
        $price = $this->item->getPrice()->multi($this->quantity);

        $test = new Total($price->getAmaount(),$this->type);

        return $test;
    }

    public function isLessThan(Order $target)
    {
        //itemが違えば、falseを返す
        if($this->item->name != $target->item->name){
            return false;
        }

        return $this->quantity->isLessThan($target->quantity);
    }

    // public function isDiscountApplied(): bool {
    //     return $this->discountApplied;
    // }

    public function add(Order $order):Order
    {
        if(! $this->item = $order->item){
            throw new IntlException();
        }
        // new OrderするとComon〜〜が入らないのでFacotryを使う ひとまずJavaの書き方で
    //    return new Order($this->item,$this->quantity->add($order->quantity));
        return OrderFactory::create($this->item,$this->quantity->add($order->quantity));
    }

    public function getType(): string {
        return $this->type;
    }

}