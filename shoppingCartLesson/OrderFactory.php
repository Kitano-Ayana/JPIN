<?php

class OrderFactory
{
    public static function create(Item $item, Quantity $quantity)
    {
        return new Order($item,$quantity,buildlimiter());
    }

    private function buildlimiter():QuantityLimit 
    {
        $apple = new Item(
            new ItemName("apple"),
            new ItemPrice(Currency.YEN,100)
        );

        $banana = new Item(
            new ItemName("banana"),
            new ItemPrice(Currency.YEN,80)
        );

        $orange = new Item(
            new ItemName("orange"),
            new ItemPrice(Currency.YEN,120)
        );

        $limit = new QuantityLimit($apple, new Quantity(10));
        $limit->setNext(new QuantityLimit($banana, new Quantity(20)))
        ->setNext(new QuantityLimit($orange, new Quantity(5)));


        return $limit;

    }
}