<?php

namespace Gibbo\Bryn;

/**
 * Calculates an exchange rate.
 */
interface ExchangeRateCalculator
{
    /**
     * Calculate the exchange rate.
     *
     * @param Exchange $exchange  The exchange from which to calculate the exchange rate.
     *
     * @return ExchangeRate
     */
    public function getRate(Exchange $exchange): ExchangeRate;
}