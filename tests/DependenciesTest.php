<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DependenciesTest extends TestCase {

    private $value;


    public function testFirstStep(): int
    {
        $this->value = 1;

        $this->assertEquals(1, $this->value);

        return $this->value;
    }

    /**
     * @depends testFirstStep
     */
    public function testDependency1($value): int
    {
        $value++;

        $expected = 2;
        $result = $value;

        $this->assertEquals($result, $expected);

        return $value;
    }

    /**
     * @depends testDependency1
     */
    public function testDependency2($value): void
    {
        $value++;

        $expected = 3;
        $result = $value;

        $this->assertEquals($result, $expected);
    }
}
