<?php

class Item
{

    private $name;

    private $price;


    public function __construct(ItemName $name,ItemPrice $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():ItemName
    {
        return $this->name;
    }

    public function getPrice():ItemPrice
    {
        return $this->price;
    }





}