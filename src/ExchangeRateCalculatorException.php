<?php

namespace Gibbo\Bryn;

/**
 * An exception be thrown by exchange rate calculators.
 */
class ExchangeRateCalculatorException extends BrynException
{

    /**
     * Thrown when a currency is not supported by a calculator.
     *
     * @param Currency               $currency   The unsupported currency.
     * @param ExchangeRateCalculator $calculator The calculator that did not support the currency.
     *
     * @return static
     */
    public static function unsupportedCurrency(Currency $currency, ExchangeRateCalculator $calculator)
    {
        return new static(sprintf(
            "The currency '%s' is not supported by the calculator (%s)",
            $currency,
            get_class($calculator)
        ));
    }
}