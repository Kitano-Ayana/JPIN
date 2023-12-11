<?php

class QuantityLimit
{

    private Order $limit;
    private QuantityLimit $next;

    public function __construct(Item $item,Quantity $limit)
    {
        $this->limit = new Order($item,$limit);
    }

    //複数のQuantityLimitを繋げることができる
    public function setNext(QuantityLimit $next): QuantityLimit
    {
        $this->next = $next;
        return $next;

    }

    public function check(Order $target): bool
    {
        var_dump("passCheck");
        // 注文がリミットを超えた場合はfalseを返す
        if (!$this->limit->isLessThan($target)) {
            return false;
        }

        // 次のQuantityLimitがある場合は、そのcheckを呼び出す
        if (isset($this->next)) {
            return $this->next->check($target);
        }

        // すべてのチェックを通過した場合はtrueを返す
        return true;
    }
}