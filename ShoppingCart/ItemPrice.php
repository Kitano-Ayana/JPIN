<?php

class ItemPrice
{

    private $price;

    private $currency;

    public function __construct($price, ItemCurrency $currency)
    {
        $this->price = $price;
        $this->currency = $currency;
    }
}