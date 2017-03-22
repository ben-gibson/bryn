<?php

namespace Gibbo\Bryn\Test;

use Gibbo\Bryn\Currency;
use PHPUnit\Framework\TestCase;

/**
 * Currency tests.
 */
class CurrencyTest extends TestCase
{

    /**
     * Can be initialised.
     *
     * @return void
     */
    public function testCanBeInitialised()
    {
        $this->assertInstanceOf(Currency::class, Currency::GBP());
    }

    /**
     * Can be cast to a string.
     *
     * @return void
     */
    public function testCanBeCastToString()
    {
        $currency = Currency::GBP();

        $this->assertSame('GBP', $currency->__toString());
    }

    /**
     * Can get the symbol.
     *
     * @return void
     */
    public function testCanGetSymbol()
    {
        $currency = Currency::GBP();

        $this->assertSame('£', $currency->getSymbol());
    }
}