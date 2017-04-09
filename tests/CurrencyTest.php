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
     * Does throw an exception when constructed with an invalid code.
     *
     * @expectedException \Gibbo\Bryn\BrynException
     * @expectedExceptionMessageRegExp /Invalid currency code '\w+', must be 3 characters long/
     *
     * @dataProvider invalidCodeProvider
     *
     * @param string $code
     *
     * @return void
     */
    public function testDoesThrowOnInvalidCode(string $code)
    {
        new Currency($code, '£', 'foo');
    }

    /**
     * Provides invalid codes.
     *
     * @return array
     */
    public function invalidCodeProvider(): array
    {
        return [
            ['foobar'],
            ['GBPP'],
            ['GB'],
            ['B']
        ];
    }

    /**
     * Test has code.
     *
     * @dataProvider hasCodeProvider
     *
     * @param Currency $currency
     * @param string   $code
     * @param bool     $expected
     *
     * @return void
     */
    public function testHasCode(Currency $currency, string $code, bool $expected)
    {
        $this->assertSame($currency->hasCode($code), $expected);
    }

    /**
     * Data provide for the has code test.
     *
     * @return array
     */
    public function hasCodeProvider(): array
    {
        return [
            [Currency::GBP(), 'GBP', true],
            [Currency::USD(), 'USD', true],
            [Currency::NZD(), 'GBP', false],
        ];
    }

    /**
     * Can get name.
     *
     * @return void
     */
    public function testCanGetName()
    {
        $this->assertSame(Currency::GBP()->getName(), 'Great British Pound');
    }

    /**
     * Can get verbose string representation.
     *
     * @return void
     */
    public function testCanGetVerboseString()
    {
        $this->assertSame(Currency::GBP()->toStringVerbose(), 'GBP (Great British Pound £)');
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
     * Can a currency can be created from just its code.
     *
     * @return void
     */
    public function testCanBeCreatedFromCode()
    {
        $this->assertEquals(Currency::GBP(), Currency::code('GBP'));
        $this->assertEquals(Currency::USD(), Currency::code('USD'));
    }

    /**
     * Does throw when code is not supported.
     *
     * @expectedException \Gibbo\Bryn\BrynException
     * @expectedExceptionMessageRegExp /Cannot find currency using code '\w+'/
     *
     * @return void
     */
    public function testDoesThrowWhenCodeNotSupported()
    {
        Currency::code('GGB');
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

    /**
     * Does identify itself correctly.
     *
     * @return void
     */
    public function testIsEuro()
    {
        $this->assertTrue(Currency::EUR()->isEuro());
    }
}