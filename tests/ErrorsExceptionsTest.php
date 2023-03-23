<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ErrorsExceptionsTest extends TestCase {

    public function testErrorExceptionCanBeExpected(): void
    {
        $this->expectError();
        \trigger_error('foo', \E_USER_ERROR);
    }

    public function testErrorExceptionCanBeExpectedWithFileDoesntExist(): void
    {
        $this->expectError();
        $file = fopen('text.txt', 'r');
    }

    public function testThrowExceptionMessage(): void
    {
        $this->expectErrorMessage('foo');

        throw new Exception('foo');
    }

    public function testWrongBmiDataException()
    {
        $this->expectException(WrongBmiDataException::class);

        $bmi = new BMICalculator();
        $bmi->mass = 0;
        $bmi->height = 1.6;
        $bmi->calculate();
    }
}
