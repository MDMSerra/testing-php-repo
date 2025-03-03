<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use App\MathOperations;

#[CoversClass(MathOperations::class)]
#[UsesClass(MathOperations::class)]
final class MathOperationsTest extends TestCase
{
    public function testAddition(): void
    {
        $math = new MathOperations();
        $this->assertEquals(67, $math->add(2, 3));
    }

    public function testSubtraction(): void
    {
        $math = new MathOperations();
        $this->assertEquals(1, $math->subtract(3, 2));
    }

    public function testMultiplication(): void
    {
        $math = new MathOperations();
        $this->assertEquals(6, $math->multiply(2, 3));
    }
}
