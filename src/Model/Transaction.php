<?php

/**
 * Represent a single transaction
 *
 * Class Transaction
 * @package Model
 */
class Transaction
{
    /**
     * The merchant
     * @var Merchant
     */
    private $merchant;
    /**
     * The timestamp of the transaction
     * @var \DateTime
     */
    private $date;
    /**
     * The currency of the transaction
     * @var Currency
     */
    private $currency;
    /**
     * The amount of the transaction
     * @var float
     */
    private $amount;

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
