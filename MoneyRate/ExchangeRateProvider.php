<?php

interface ExchangeRateProvider {
    public function getRate(Currency $from, Currency $to): float;
}