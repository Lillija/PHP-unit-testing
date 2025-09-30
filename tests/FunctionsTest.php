<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require dirname(__DIR__) . '/lib/functions.php';

final class FunctionsTest extends TestCase
{
    public function testAddTwoPositiveIntegers(): void
    {
        $this->assertSame(5, addIntegers(2, 3));
    }

    public function testAddTwoNegativeIntegers(): void
    {
        $this->assertSame(-5, addIntegers(-2, -3));
    }
}
