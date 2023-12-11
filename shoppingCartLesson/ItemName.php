<?php

class ItemName
{

    private string $value;

    public function __construct($value)
    {
        if($value == null ){
            throw new IntlException();
        }

        $this->value = $value;

    }
}