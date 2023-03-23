<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {

    /**
     * @dataProvider emailProvider
     */
    public function testValidEmail(string $email): void
    {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    public function emailProvider():array
    {
        return [
            ['oraoraora@jojo.com'],
            ['ora@jojojo.comcom'],
            ['ora@jojo.da']
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testMath(int $a, int $b, int $expected): void
    {
        $result = $a * $b;

        $this->assertEquals($result, $expected);
    }

    public function numbersProvider(): array
    {
        return [
            [1,2,2],
            [2,2,4],
            [3,3,9]
        ];
    }
}

