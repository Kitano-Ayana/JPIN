<?php

class ItemName
{

    private int $value;

    public function __construct($value)
    {
        if($value == null ){
            throw new IntlException();
        }

        $this->value = $$value;

    }
}