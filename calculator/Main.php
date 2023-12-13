<?php

require_once 'Number.php';
require_once 'Add.php';

$addition = new Add();
$result = $addition->execute(5, 3);

//多項式になるとこんな感じになる
// まずは、優先記号があるかどうか確かめる
// その後に、優先記号の前後の数字で処理をする
$test = (5 + 3 * 2);

print_r($result);

?>