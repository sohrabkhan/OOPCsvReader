<?php

/**
 *
 * Uses CurrencyWebservice
 */
class CurrencyConverterService
{
    /**
     * The default currency.
     * @var Currency
     */
    private $defaultCurrency;
    /**
     * Object of type CurrencyServiceInterface which can be used to
     * @var CurrencyServiceInterface
     */
    private $currencyService;

    /**
     * Instantiate the CurrencyConverter
     * @param CurrencyServiceInterface $currencyService
     * @param Currency $defaultCurrency
     */
    public function __construct(CurrencyServiceInterface $currencyService, Currency $defaultCurrency)
    {
        $this->currencyService = $currencyService;
        $this->defaultCurrency = $defaultCurrency;
    }

    /**
     * Converts an amount in a particular currency to the default currency
     * @param Currency $currency
     * @param float $amount
     * @return float
     */
    public function convert(Currency $currency, $amount)
    {
        $rate = $currency->getRate() * $amount;
        return $rate;
    }

    /**
     * Convert an amount in one currency to an amount to another currency
     * @param Currency $from
     * @param Currency $to
     * @param float $amount
     */
    public function convertTo(Currency $from, Currency $to, $amount)
    {
        //TODO can implement this method to convert from one currency to another
    }
}