<?php

namespace Gibbo\CurrencyConversion;

/**
 * Calculates the rate from a conversion.
 */
interface RateCalculator
{
    /**
     * Get the rate of a conversion.
     *
     * @param Conversion $conversion
     *
     * @return Rate
     */
    public function rate(Conversion $conversion);
}