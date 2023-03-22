<?php

use PHPUnit\Framework\TestCase;


final class BMICalculatorTest extends TestCase {

    public function testUnderWeightBMITextResult()
    {
        $bmiCalculator = new BMICalculator();

        $bmiCalculator->bmi = 10;
        
        $result = $bmiCalculator->getTextResultFromBMI();
        $expected = 'Underweight';

        $this->assertSame($expected, $result);
    }

    public function testNormalWeightBMITextResult()
    {
        $bmiCalculator = new BMICalculator();

        $bmiCalculator->bmi = 19;
        
        $result = $bmiCalculator->getTextResultFromBMI();
        $expected = 'Normal';

        $this->assertSame($expected, $result);
    }

    public function testOverWeightBMITextResult()
    {
        $bmiCalculator = new BMICalculator();

        $bmiCalculator->bmi = 26;
        
        $result = $bmiCalculator->getTextResultFromBMI();
        $expected = 'Overweight';

        $this->assertSame($expected, $result);
    }

    public function testCorrectBMIValue()
    {
        $bmiCalculator = new BMICalculator();
        $bmiCalculator->mass = 100;
        $bmiCalculator->height = 1.6;

        $result = $bmiCalculator->calculate();
        $expected = 39.1;

        $this->assertEquals($expected, $result);
    }
}
