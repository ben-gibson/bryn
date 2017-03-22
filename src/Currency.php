<?php

namespace Gibbo\Bryn;

/**
 * Currency.
 */
class Currency
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $symbol;

    /**
     * Constructor.
     *
     * @param string $code
     * @param string $symbol
     */
    public function __construct(string $code, string $symbol)
    {
        $this->code   = $code;
        $this->symbol = $symbol;
    }

    /**
     * Great British Pound.
     *
     * @return static
     */
    public static function GBP()
    {
        return new static('GBP', '£');
    }

    /**
     * US Dollar
     *
     * @return static
     */
    public static function USD()
    {
        return new static('USD', '$');
    }

    /**
     * Get the currency symbol.
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->code;
    }
}