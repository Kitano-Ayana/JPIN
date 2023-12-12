<?php

require_once 'Order.php';
require_once 'QuantityLimit.php';

class OrderFactory
{
    public static function create(Item $item, Quantity $quantity)
    {
       // $limit = self::buildlimiter();
        $order = new Order($item,$quantity,null,self::buildlimiter());
        
        return $order;
    }

    private static function buildlimiter():QuantityLimit 
    {
        $apple = new Item(
            new ItemName("apple"),
            new ItemPrice(100)
        );

        $banana = new Item(
            new ItemName("banana"),
            new ItemPrice(80)
        );

        $orange = new Item(
            new ItemName("orange"),
            new ItemPrice(120)
        );

        $limit = new QuantityLimit($apple, new Quantity(10));
        $limit->setNext(new QuantityLimit($banana, new Quantity(20)));
        $limit->setNext(new QuantityLimit($orange, new Quantity(5)));

        return $limit;
    

    }
}