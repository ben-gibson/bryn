<?php

namespace Gibbo\CurrencyConversion;

/**
 * Represents a conversion between currencies.
 */
class Conversion
{
    /**
     * @var Currency
     */
    private $base;

    /**
     * @var Currency
     */
    private $to;

    /**
     * Constructor.
     *
     * @param Currency $base
     * @param Currency $to
     */
    public function __construct(Currency $base, Currency $to)
    {
        $this->base = $base;
        $this->to   = $to;
    }

    /**
     * Get the currency to covert from.
     *
     * @return Currency
     */
    public function getBase(): Currency
    {
        return $this->base;
    }

    /**
     * Get the currency to convert to.
     *
     * @return Currency
     */
    public function getTo(): Currency
    {
        return $this->to;
    }
}