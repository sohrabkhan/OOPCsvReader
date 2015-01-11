<?php

/**
 * The webservice that retrieves currency rates. In this case values are static but a similar Service can be created
 * if
 *
 * @author Sohrab Khan
 * @version 0.1
 */
class StaticCurrencyService implements CurrencyServiceInterface
{
    /**
     * An array of Currency
     * @var array
     */
    private $currencyList;

    /**
     * The staic service gets all it's currencies when instantiated
     */
    public function __construct()
    {
        $gbp = new Currency();
        $gbp->setName("British Pound");
        $gbp->setCode("GBP");
        $gbp->setSymbol("£");
        $gbp->setRate(1);
        $this->currencyList[] = $gbp;

        $usd = new Currency();
        $usd->setName("US Dollar");
        $usd->setCode("USD");
        $usd->setSymbol("$");
        $usd->setRate(1.5);
        $this->currencyList[] = $usd;

        $eur = new Currency();
        $eur->setName("Euro");
        $eur->setCode("EUR");
        $eur->setSymbol("€");
        $eur->setRate(1.2);
        $this->currencyList[] = $eur;
    }


    /**
     * Return the currency when given currency code
     *
     * @param string $currencyCode
     * @return Currency
     */
    public function getCurrency($currencyCode)
    {
        foreach($this->currencyList as $key => $object) {
            if($object->getCode() == $currencyCode) {
                return $object;
            }
        }
    }

    /**
     * Return all the currencies
     * @return array
     */
    public function getCurrencies()
    {
        return $this->currencyList;
    }
}
