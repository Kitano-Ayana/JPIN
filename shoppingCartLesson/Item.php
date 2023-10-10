<?php

 class Item{

    private ItemName $name;
    private ItemPrice $price;

    public function __construct(ItemName $name, ItemPrice $price)
    {
        if($name == null || $price == null){
            throw new IntlException();
        }

        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice():ItemPrice
    {
        return $this->price;
    }

}

