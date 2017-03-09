<?php

namespace Gibbo\CurrencyConversion;

/**
 * Represents the rate of a currency conversion.
 */
class Rate
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var Conversion
     */
    private $conversion;

    /**
     * Constructor.
     *
     * @param Conversion $conversion
     * @param float $value
     */
    public function __construct(Conversion $conversion, float $value)
    {
        $this->conversion = $conversion;
        $this->value      = $value;
    }


    /**
     * Multiply
     */
    public function multiply(float $unit)
    {
        return $this->value * $unit;
    }
}