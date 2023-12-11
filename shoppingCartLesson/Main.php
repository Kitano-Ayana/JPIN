<?php

require_once 'ItemName.php';
require_once 'ItemPrice.php';
require_once 'Item.php';
require_once 'Quantity.php';
require_once 'OrderFactory.php';
require_once 'ShoppingCart.php';

$apple = new Item( new ItemName('apple'),new ItemPrice(100));
$banana = new Item( new ItemName('banana'),new ItemPrice(80));


$shoppingCart = new ShoppingCart();
$shoppingCart->add( new Order($apple ,new Quantity(3)));
$shoppingCart->add( new Order($banana ,new Quantity(5)));
$shoppingCart->add(new Order($banana, new Quantity(5), OrderType::CREDIT));


$total = $shoppingCart->getTotal();
print_r($total->getAmount());

