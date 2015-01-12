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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
}
