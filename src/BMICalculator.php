<?php

/** 
 * BMI = Body Mass Index
 */
final class BMICalculator {

    public $bmi;

    public $mass;

    public $height;

    public function calculate()
    {
        if($this->mass <= 0 || $this->height <= 0) {
            throw new WrongBmiDataException('error message');
        }

        return round($this->mass / pow($this->height, 2), 1);
    }

    public function getTextResultFromBMI()
    {
        if($this->bmi < 18)
        return 'Underweight';
        elseif($this->bmi >= 18 && $this->bmi <= 25)
        return 'Normal';
        else
        return 'Overweight';
    }
}
