<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ShoppingCartWithTraitTest extends TestCase {

    use DatabaseTrait;
    use ShoppingCartFixtureTrait;

    public function testCorrectNumberOfItems()
    {
        $this->cart->addItem('one');

        $expected = 1;
        $result = $this->cart->amount;

        $this->assertEquals($expected, $result);
    }

    public function testCorrectItemName()
    {
        $this->cart->addItem('Apple');
        $this->assertContains('Apple', $this->cart->cartItems);
    }
}
