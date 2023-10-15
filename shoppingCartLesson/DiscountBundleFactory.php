<?php

class DiscountBundleFactory {
    public static function create(): DiscountBundle {
        $result = new Order(
            new Item(
                new ItemName("discount"),
                new ItemPrice(Currency::YEN, 18)
            ),
            new Quantity(1),
            OrderType::CREDIT
        );

        $bundle = new DiscountBundle(
            $result,
            new Item(
                new ItemName("apple"),
                new ItemPrice(Currency::YEN, 100)
            ),
            new Item(
                new ItemName("banana"),
                new ItemPrice(Currency::YEN, 80)
            )
        );

        return $bundle;
    }
}