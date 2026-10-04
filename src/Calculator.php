<?php
namespace Auriana\Workshop5;

class Calculator
{
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }

    
    public function subtraction(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }

    // division
    public function division(int $a, int $b): float
    {
        if($b === 0) throw new \DivisionByZeroError('division par zéro impossible');
        return $a / $b;
    }


}