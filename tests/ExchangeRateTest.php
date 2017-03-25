<?php

namespace Gibbo\Bryn\Test;

use Gibbo\Bryn\Exchange;
use Gibbo\Bryn\Currency;
use Gibbo\Bryn\ExchangeRate;
use \PHPUnit\Framework\TestCase;

/**
 * Exchange rate tests.
 */
class ExchangeRateTest extends TestCase
{

    /**
     * Can be initialised.
     *
     * @return void
     */
    public function testCanBeInitialised()
    {
        $this->assertInstanceOf(ExchangeRate::class, new ExchangeRate(new Exchange(Currency::GBP(), Currency::USD()), 1.2));
    }

    /**
     * Can be converted.
     *
     * @param ExchangeRate $exchangeRate
     * @param float        $amount
     * @param float        $expectedValue
     *
     * @dataProvider convertValuesProvider
     *
     * @return void
     */
    public function testCanConvert(ExchangeRate $exchangeRate, float $amount, float $expectedValue)
    {
        $this->assertSame($expectedValue, $exchangeRate->convert($amount));
    }

    /**
     * Provides conversion values.
     *
     * @return array
     */
    public function convertValuesProvider()
    {
        return [
            [
                new ExchangeRate(new Exchange(Currency::GBP(), Currency::USD()), 1.25),
                100,
                125,
            ],
            [
                new ExchangeRate(new Exchange(Currency::USD(), Currency::GBP()), 0.80),
                1204,
                963.2,
            ],
        ];
    }

    /**
     * Can be cast to a string.
     *
     * @return void
     */
    public function testCanBeCastToString()
    {
        $exchangeRate = new ExchangeRate(new Exchange(Currency::GBP(), Currency::USD()), 1.25);

        $this->assertSame('1 GBP(£) = 1.25 USD($)', $exchangeRate->__toString());
    }

    /**
     * Can be flipped
     *
     * @return void
     */
    public function testCanBeFlipped()
    {
        $exchangeRate = new ExchangeRate(new Exchange(Currency::GBP(), Currency::USD()), 1.25);

        $this->assertEquals(new ExchangeRate(new Exchange(Currency::USD(), Currency::GBP()), 0.8), $exchangeRate->flip());
    }
}