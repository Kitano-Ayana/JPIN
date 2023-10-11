<?php

class StaticExchangeRateProvider implements ExchangeRateProvider {
    private array $rates = [
        'USD' => ['JPY' => 110.0, 'EUR' => 0.85],
    ];

    public function getRate(Currency $from, Currency $to): float {
        return $this->rates[$from->getCode()][$to->getCode()] ?? 1.0;
    }
}