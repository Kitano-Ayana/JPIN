<?php

require_once 'CalcFactory.php';
require_once 'Calculator.php';
require_once 'Add.php';
require_once 'Minus.php';
require_once 'OperatorType.php';


$calc = CalcFactory::getInstance();
$calc->setLeft(3);


$calc->setType(OperatorType::ADD);
$calc->setRight(2);
$calc->getResult();





//enumとクラスの使い分け
//カーディナリティが低い、とりえる値のバリエーションが小さい時はenumを使う
