<?php

//実行コード
$jpy = new Currency('JPY');
$usd = new Currency('USD');

$exchangeRateProvider = new StaticExchangeRateProvider();

$moneyInJPY = new Money(1000, $jpy, $exchangeRateProvider); // 1000円

$moneyInUSD = $moneyInJPY->convertTo($usd); // USDに変換