<?php

class Money
{

    private $amaount;

    private Currency $currency;

    private Rate $rate;

    public function __construct(int $amaount, Currency $currency, Rate $rate)
    {
        $this->amaount = $amaount;
        $this->currency = $currency;
        $this->rate = $rate;

    }

    public function convertTo(Currency $targetCurrency):Money
    {
        $rate = $this->rate->getRate($this->currency, $targetCurrency);
        $convertedAmount = $this->amaount * $rate;

        return new Money($convertedAmount,$targetCurrency,$this->rateProvider);

    }



}