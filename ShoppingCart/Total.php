<?php

class Total
{
    private $amount;
    private $dealType;

    const TYPE_PLUS = 'PLUS';
    const TYPE_MINUS = 'MINUS';

    public function __construct($amount, $dealType)
    {
        $this->amount = $amount;
        $this->dealType = $dealType;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getDealType(): string
    {
        return $this->dealType;
    }

    public function add(Total $target): Total
    {
        if ($target->getDealType() === self::TYPE_PLUS) {
            return new Total($this->amount + $target->getAmount(), self::TYPE_PLUS);
        }

        if ($target->getDealType() === self::TYPE_MINUS) {
            return new Total($this->amount - $target->getAmount(), self::TYPE_PLUS);
        }
    }

}