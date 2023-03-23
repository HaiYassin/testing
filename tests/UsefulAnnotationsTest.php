<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UsefulAnnotationsTest extends TestCase {

    private int $value;

    /**
     * @before
     */
    public function runBeforeEachTestMethod(): void
    {
        $this->value = 1;
    }

    /**
     * @after
     */
    public function runAfterEachTestMethod(): void
    {
        unset($this->value);
    }

    public function testAnnotationWithBefore(): void
    {
        $this->value++;

        $expected = 2;
        $result = $this->value;

        $this->assertEquals($expected, $result);
    }
}
