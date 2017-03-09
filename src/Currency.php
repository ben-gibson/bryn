<?php

namespace Gibbo\CurrencyConversion;

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
     * Constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * Great British Pound.
     *
     * @return static
     */
    public static function GBP()
    {
        return new static('GBP');
    }

    /**
     * US Dollar
     *
     * @return static
     */
    public static function USD()
    {
        return new static('USD');
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->code;
    }
}