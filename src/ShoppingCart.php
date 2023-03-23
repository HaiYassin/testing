<?php

declare(strict_types=1);

final class ShoppingCart {

    public array $cartItems = [];
    public int $amount = 0;

    public function addItem(string $item): void
    {
        $this->cartItems[] = $item;
        $this->amount++;
    }
}
