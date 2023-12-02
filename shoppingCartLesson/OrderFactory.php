<?php

class OrderFactory
{
    private function buildlimiter():QuantityLimit 
    {
        $apple = new Order(
                        Item(new ItemName("apple"), new ItemPrice(Currency.YEN,100)),
                        new Quantity(10));

        $banana = new Order(
            Item(new ItemName("banana"), new ItemPrice(Currency.YEN,80)),
            new Quantity(20));
            
        $orange = new Order(
            Item(new ItemName("orange"), new ItemPrice(Currency.YEN,120)),
            new Quantity(5));     

        return null;

    }
}