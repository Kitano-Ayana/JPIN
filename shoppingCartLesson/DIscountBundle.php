<?php

class DiscountBundle {
    private array $map = [];
    private Order $discountResult;

    public function __construct(Order $discountResult, Item ...$items) {
        foreach ($items as $item) {
            $this->map[spl_object_hash($item)] = null;
        }
        $this->discountResult = $discountResult;
    }

    public function addItemWithOrder(Item $item, Order $order): void {
        $this->map[spl_object_hash($item)] = $order;
    }

    public function getOrderForItem(Item $item): ?Order {
        return $this->map[spl_object_hash($item)] ?? null;
    }

    public function getDiscountResult(): Order {
        return $this->discountResult;
    }
}