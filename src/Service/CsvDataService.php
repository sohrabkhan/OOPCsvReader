<?php

/**
 * Class CsvDataService
 */
class CsvDataService implements DataServiceInterface
{
    private $csvReader;

    public function __construct(CsvReader $csvReader)
    {
        $this->csvReader = $csvReader;
    }

    public function connect()
    {
        parent::connect();
    }

    public function disconnect()
    {
        parent::disconnect();
    }

    /**
     * @param $merchant_id int
     * @return array
     */
    public function getTransactions($merchant_id)
    {
        // TODO: Implement getTransactions() method.
    }
}
