<?php

/**
 * Represents the Merchant Entity
 * Class Merchant
 */
class Merchant
{
    /**
     * The unique merchant id
     * @var int
     */
    private $id;
    /**
     * The name of the merchant.
     * @var string
     */
    private $name;

    //TODO other properties of a merchant

    public function __construct($id, $name = NULL)
    {
        $this->id = $id;
        $this->name = $name;
    }


    public function getTransactions()
    {

    }
}
