<?php

class Currency
{
    private string $code; //(JPY,USD,EUR)

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getCode():string
    {
        return $this->code;
    }

}