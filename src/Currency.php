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
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $code
     * @param string $symbol
     * @param string $name
     *
     * @throws BrynException Invalid currency code.
     */
    public function __construct(string $code, string $symbol, string $name)
    {
        if (mb_strlen($code) !== 3) {
            throw new BrynException(sprintf("Invalid currency code '%s', must be 3 characters long", $code));
        }

        $this->code   = mb_strtoupper($code);
        $this->symbol = $symbol;
        $this->name   = $name;
    }

    /**
     * Great British Pound.
     *
     * @return static
     */
    public static function GBP()
    {
        return new static('GBP', '£', 'Great British Pound');
    }

    /**
     * US Dollar.
     *
     * @return static
     */
    public static function USD()
    {
        return new static('USD', '$', 'United States Dollar');
    }

    /**
     * Euro.
     *
     * @return static
     */
    public static function EUR()
    {
        return new static('EUR', '€', 'Euro');
    }

    /**
     * Japanese Yen.
     *
     * @return static
     */
    public static function JPY()
    {
        return new static('JPY', '¥', 'Japanese Yen');
    }

    /**
     * Bulgarian Lev.
     *
     * @return static
     */
    public static function BGN()
    {
        return new static('BGN', 'лв', 'Bulgarian Lev');
    }

    /**
     * Czech Republic Koruna.
     *
     * @return static
     */
    public static function CZK()
    {
        return new static('CZK', 'Kč', 'Czech Republic Koruna');
    }

    /**
     * Danish Krone.
     *
     * @return static
     */
    public static function DKK()
    {
        return new static('DKK', 'kr.', 'Danish Krone');
    }

    /**
     * Hungarian Forint.
     *
     * @return static
     */
    public static function HUF()
    {
        return new static('HUF', 'Ft', 'Hungarian Forint');
    }

    /**
     * Polish Zloty.
     *
     * @return static
     */
    public static function PLN()
    {
        return new static('PLN', 'zł', 'Polish Zloty');
    }

    /**
     * Romanian Leu.
     *
     * @return static
     */
    public static function RON()
    {
        return new static('RON', 'lei', 'Romanian Leu');
    }

    /**
     * Swedish Krona.
     *
     * @return static
     */
    public static function SEK()
    {
        return new static('SEK', 'kr', 'Swedish Krona');
    }

    /**
     * Swiss Franc.
     *
     * @return static
     */
    public static function CHF()
    {
        return new static('CHF', 'CHF', 'Swiss Franc');
    }

    /**
     * Norwegian Krone.
     *
     * @return static
     */
    public static function NOK()
    {
        return new static('NOK', 'kr', 'Norwegian Krone');
    }

    /**
     * Croatian kuna.
     *
     * @return static
     */
    public static function HRK()
    {
        return new static('HRK', 'kn', 'Croatian kuna');
    }

    /**
     * Russian rouble.
     *
     * @return static
     */
    public static function RUB()
    {
        return new static('RUB', '₽', 'Russian rouble');
    }

    /**
     * Turkish lira.
     *
     * @return static
     */
    public static function TRY()
    {
        return new static('TRY', '₺', 'Turkish lira');
    }

    /**
     * Australian dollar.
     *
     * @return static
     */
    public static function AUD()
    {
        return new static('AUD', '$', 'Australian dollar');
    }

    /**
     * Brazilian real.
     *
     * @return static
     */
    public static function BRL()
    {
        return new static('BRL', 'R$', 'Brazilian real');
    }

    /**
     * Canadian dollar.
     *
     * @return static
     */
    public static function CAD()
    {
        return new static('CAD', '$', 'Canadian dollar');
    }

    /**
     * Chinese yuan renminbi.
     *
     * @return static
     */
    public static function CNY()
    {
        return new static('CNY', '¥', 'Chinese yuan renminbi');
    }

    /**
     * Hong Kong dollar.
     *
     * @return static
     */
    public static function HKD()
    {
        return new static('HKD', 'HK$', 'Hong Kong dollar');
    }

    /**
     * Indonesian rupiah.
     *
     * @return static
     */
    public static function IDR()
    {
        return new static('IDR', 'Rp', 'Indonesian rupiah');
    }

    /**
     * Israeli shekel.
     *
     * @return static
     */
    public static function ILS()
    {
        return new static('ILS', '₪', 'Israeli shekel');
    }

    /**
     * Indian rupee.
     *
     * @return static
     */
    public static function INR()
    {
        return new static('INR', '₹', 'Indian rupee');
    }

    /**
     * South Korean won.
     *
     * @return static
     */
    public static function KRW()
    {
        return new static('KRW', '₩', 'South Korean won');
    }

    /**
     * Mexican peso.
     *
     * @return static
     */
    public static function MXN()
    {
        return new static('MXN', '$', 'Mexican peso');
    }

    /**
     * Malaysian ringgit.
     *
     * @return static
     */
    public static function MYR()
    {
        return new static('MYR', 'RM', 'Malaysian ringgit');
    }

    /**
     * New Zealand dollar.
     *
     * @return static
     */
    public static function NZD()
    {
        return new static('NZD', '$', 'New Zealand dollar');
    }

    /**
     * Philippine peso.
     *
     * @return static
     */
    public static function PHP()
    {
        return new static('PHP', '₱', 'Philippine peso');
    }

    /**
     * Singapore dollar.
     *
     * @return static
     */
    public static function SGD()
    {
        return new static('SGD', '$', 'Singapore dollar');
    }

    /**
     * Thai baht.
     *
     * @return static
     */
    public static function THB()
    {
        return new static('THB', '฿', 'Thai baht');
    }

    /**
     * South African rand.
     *
     * @return static
     */
    public static function ZAR()
    {
        return new static('ZAR', 'R', 'South African rand');
    }

    /**
     * Does this represent the euro?
     *
     * @return bool
     */
    public function isEuro(): bool
    {
        return $this->code === 'EUR';
    }

    /**
     * Does this currency have the given code.
     *
     * @param string $code
     *
     * @return bool
     */
    public function hasCode(string $code): bool
    {
        return ($this->code === mb_strtoupper($code));
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
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return $this->code;
    }

    /**
     * Get a verbose string representation of the currency..
     *
     * @return string
     */
    public function toStringVerbose(): string
    {
        return sprintf('%s (%s %s)', $this, $this->getName(), $this->getSymbol());
    }

    /**
     * Get a currency from its code.
     *
     * @param string $code
     *
     * @throws BrynException Throw when a currency cannot be found from the given code.
     *
     * @return Currency
     */
    public static function code(string $code): Currency
    {
        $currencies = static::getAll();

        foreach ($currencies as $currency) {

            if ($currency->hasCode($code)) {
                return $currency;
            }
        }

        throw new BrynException(sprintf("Cannot find currency using code '%s'", $code));
    }

    /**
     * Gets all known currencies.
     *
     * @return Currency[]
     */
    public static function getAll(): array
    {
        return [
            static::USD(),
            static::GBP(),
            static::EUR(),
            static::AUD(),
            static::BGN(),
            static::BRL(),
            static::CAD(),
            static::CHF(),
            static::CNY(),
            static::CZK(),
            static::DKK(),
            static::HKD(),
            static::HRK(),
            static::HUF(),
            static::ZAR(),
            static::TRY(),
            static::THB(),
            static::SGD(),
            static::SEK(),
            static::RUB(),
            static::RON(),
            static::PLN(),
            static::PHP(),
            static::NZD(),
            static::NOK(),
            static::MYR(),
            static::MXN(),
            static::KRW(),
            static::JPY(),
            static::INR(),
            static::ILS(),
            static::IDR(),
        ];
    }
}