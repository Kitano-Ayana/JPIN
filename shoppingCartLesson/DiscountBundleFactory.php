<?php

require_once 'OrderType.php';

class DiscountBundleFactory {
    public static function create(): DiscountBundle {
        $result = new Order(
            new Item(
                new ItemName("discount"),
                new ItemPrice( 18)
            ),
            new Quantity(1),
            //OrderType::CREDIT
        );

        $bundle = new DiscountBundle(
            $result,
            new Item(
                new ItemName("apple"),
                new ItemPrice(100)
            ),
            new Item(
                new ItemName("banana"),
                new ItemPrice(80)
            )
        );

        return $bundle;
    }
}