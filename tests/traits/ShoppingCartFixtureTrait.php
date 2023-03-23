<?php

trait ShoppingCartFixtureTrait {
    
    protected ShoppingCart $cart;

    protected function setUp(): void
    {
        $this->cart = new ShoppingCart;
    }

    protected function teamDown(): void
    {
        unset($this->cart);
    }
}
