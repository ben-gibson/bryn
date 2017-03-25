<?php

namespace Gibbo\Bryn\Test;

use Gibbo\Bryn\Exchange;
use Gibbo\Bryn\Currency;
use PHPUnit\Framework\TestCase;

/**
 * Exchange tests.
 */
class ExchangeTest extends TestCase
{

    /**
     * Can be initialised.
     *
     * @return void
     */
    public function testCanBeInitialised()
    {
        $this->assertInstanceOf(Exchange::class, new Exchange(Currency::GBP(), Currency::USD()));
    }

    /**
     * Can get the base currency.
     *
     * @return void
     */
    public function testCanGetBaseCurrency()
    {
        $base = Currency::GBP();

        $exchange = new Exchange($base, Currency::USD());

        $this->assertSame($base, $exchange->getBase());
    }

    /**
     * Can get the counter currency.
     *
     * @return void
     */
    public function testCanGetCounterCurrency()
    {
        $counter = Currency::USD();

        $exchange = new Exchange(Currency::GBP(), $counter);

        $this->assertSame($counter, $exchange->getCounter());
    }

    /**
     * Can be flipped
     *
     * @return void
     */
    public function testCanBeFlipped()
    {
        $exchange = new Exchange(Currency::GBP(), Currency::USD());

        $this->assertEquals(new Exchange(Currency::USD(), Currency::GBP()), $exchange->flip());
    }
}