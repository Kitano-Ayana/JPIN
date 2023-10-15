<?php

//120円のバナナ作成
$banana = new Item(
    new ItemName("Banana"),
    new ItemPrice("120","JPY");

//150円のりんご作成
$apple = new Item(
    new ItemName("Apple"),
    new ItemPrice("150","JPY");


$cart = new ShoppingCart();
$cart->addCart(new Order($apple,new Quantity(3)));
$cart->addCart(new Order($banana,new Quantity(5)));
$cart->addCart(new Order($apple,new Quantity(1)),DealType::CREDIT);

$total = $cart->getTotal();
print_r($total);

