<?php

namespace Gibbo\Bryn;

/**
 * Represents an exchange rate between two currencies.
 */
class ExchangeRate
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var Exchange
     */
    private $exchange;

    /**
     * Constructor.
     *
     * @param Exchange $exchange
     * @param float    $value
     */
    public function __construct(Exchange $exchange, float $value)
    {
        $this->exchange = $exchange;
        $this->value    = $value;
    }


    /**
     * Converts a specific amount from the base currency to the counter currency at the rate.
     *
     * @param float $amount  The amount to exchange.
     *
     * @return float
     */
    public function convert(float $amount)
    {
        return $this->value * $amount;
    }


    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return sprintf(
            '1 %s(%s) = %.02f %s(%s)',
            $this->exchange->getBase(),
            $this->exchange->getBase()->getSymbol(),
            $this->value,
            $this->exchange->getCounter(),
            $this->exchange->getCounter()->getSymbol()
        );
    }
}