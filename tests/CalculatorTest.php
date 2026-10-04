<?php
use PHPUnit\Framework\TestCase;
use Auriana\Workshop5\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    // tester addition
    public function testAddition() : void
    {
        $this->assertSame(5, $this->calc->addition(2, 3));
    }
    
    // tester substraction
    public function testSubtraction() : void
    {
        $this->assertSame(-1, $this->calc->subtraction(2, 3));
    }

    // tester multiplication
    public function testMultiplication() : void
    {
        $this->assertSame(6, $this->calc->multiplication(2, 3));
    }

    // tester division
    public function testDivision(): void
    {
        $this->assertSame(2.0, $this->calc->division(6, 3));
    }

    // tester division par zéro
    public function testDivisionByZero(): void
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calc->division(5, 0);
    }

}