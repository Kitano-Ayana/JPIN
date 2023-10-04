<?php

class Order
{

    private $item;
    private $type;
    private $quantity;

   public function __construct($item, $type, $quantity)
    {
        $this->item = $item;
        $this->type = $type;
        $this->quantity = $quantity;
    }






}
