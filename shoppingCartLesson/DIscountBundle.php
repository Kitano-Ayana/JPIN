<?php


class DiscountBundle {
    private $map;
    private $discountResult;

    public function __construct($discountResult, ...$items) {
        $this->map = [];
        $this->discountResult = $discountResult;

        print_r($items);

        foreach ($items as $item) {
            $this->map[$item] = null;
        }
    }

    public function bundle($order) {
        $keys = array_keys($this->map);

        foreach ($keys as $item) {
            if ($order->isSameItem($item)) {
                $this->map[$item] = $order;
                return;
            }
        }
    }

    public function getDiscountOrder() {
        if (in_array(null, $this->map, true)) {
        
        }

        $keys = array_keys($this->map);
        foreach ($keys as $key) {
            $this->map[$key] = null;
        }

        return $this->discountResult;
    }
}
