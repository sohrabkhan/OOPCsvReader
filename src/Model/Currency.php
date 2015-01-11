<?php

/**
 * Represents a Currency like GBP or USD
 *
 * Class Currency
 * @package Model
 */
class Currency
{
    /**
     * The currency name like Pound or Dollar
     * @var string
     */
    private $name;
    /**
     * The currency code like GBP
     * @var string
     */
    private $code;
    /**
     * The currency symbol like £, € or $
     * @var string
     */
    private $symbol;
    /**
     * The rate of the currency compared to the default currency
     * @var float
     */
    private $rate;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function __toString()
    {
        return $this->getSymbol();
    }
}
