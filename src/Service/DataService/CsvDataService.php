<?php

/**
 * Class CsvDataService
 */
class CsvDataService extends AbstractFileDataService
{

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
