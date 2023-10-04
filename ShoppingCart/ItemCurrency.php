<?php

class ItemCurrency
{
    private $currency;

    public function __construct(string $currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency():string
    {
        return $this->currency;
    }
}