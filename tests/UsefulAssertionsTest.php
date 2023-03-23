<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UsefulAssertionsTest extends TestCase {

    public function testAssertSame(): void
    {
        $expected = 'baz';

        $result = 'baz';

        $this->assertSame($expected, $result);
    }

    public function testAssertEquals(): void
    {
        $expected = 2;

        $result = 2;

        $this->assertEquals($expected, $result);
    }

    public function testAssertEmpty(): void
    {
        $this->assertEmpty([]);
    }

    public function testAssertNull()
    {
        $this->assertNull(null);
    }

    public function testGreatherThan(): void
    {
        $expected = 4;

        $actual = 5;

        $this->assertGreaterThan($expected, $actual);
    }

    public function testAssertFalse(): void
    {
        $this->assertFalse(false);
    }

    public function testAssertTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testAssertCount(): void
    {
        $this->assertCount(3, [1,2,3]);
    }

    public function testAssertContains(): void
    {
        $this->assertContains(4, [1,2,3,4]);
    }

    public function testAssertStringContainsString(): void
    {
        $searchFor = 'baz';

        $searchIn = 'bazbaz';

        $this->assertStringContainsString($searchFor, $searchIn);
    }

    public function testAssertInstanceOf(): void
    {
        $this->assertInstanceOf(Exception::class, new RuntimeException);
    }

    public function testAssertArrayHasKey(): void
    {
        $this->assertArrayHasKey('bazf', ['bazf' => 'bar']);
    }

    public function testAssertArrayHasKeyOtherCase(): void
    {
        $this->testAssertArrayHasKey(0, [['zero'=>'abc']]);
    }

    public function testAssertDirectoryIsWritable(): void
    {
        $this->assertDirectoryIsWritable('docker');
    }

    public function testAssertFileIsWritable(): void
    {
        $this->assertFileIsWritable('src/BMICalculator.php');
    }
}

