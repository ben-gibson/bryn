<?php

namespace Gibbo\Bryn;

/**
 * Represents an exchange between currencies.
 */
class Exchange
{
    /**
     * @var Currency
     */
    private $base;

    /**
     * @var Currency
     */
    private $counter;

    /**
     * Constructor.
     *
     * @param Currency $base
     * @param Currency $counter
     */
    public function __construct(Currency $base, Currency $counter)
    {
        $this->base     = $base;
        $this->counter = $counter;
    }

    /**
     * Get the base currency (denominator).
     *
     * @return Currency
     */
    public function getBase(): Currency
    {
        return $this->base;
    }

    /**
     * Get the counter currency (numerator).
     *
     * @return Currency
     */
    public function getCounter(): Currency
    {
        return $this->counter;
    }
}