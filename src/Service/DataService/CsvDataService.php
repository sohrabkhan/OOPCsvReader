<?php

/**
 * CsvDataService can use a CsvReader to read a CSV file.
 */
class CsvDataService implements DataServiceInterface
{
    private $csvReader;

    public function __construct(CsvReader $csvReader)
    {
        $this->csvReader = $csvReader;
    }

    /**
     * Connect to the data service
     */
    public function connect()
    {
        parent::connect();
    }

    /**
     * Disconnect from the service and release resources
     */
    public function disconnect()
    {
        parent::disconnect();
    }

    /**
     * Returns an array of Transaction objects when given the merchant id.
     * @param integer $merchant_id
     * @return array
     */
    public function getTransactions($merchant_id)
    {
        // If no merchant id is given then all transactions are returned
        if($merchant_id == 0 || $merchant_id == NULL) {
            return $this->csvReader->getTransactions();
        }

        // If merchant id is given then only transactions for that merchant are returned
        $transactions = $this->csvReader->getTransactions();
        $results = array();

        foreach($transactions as $transaction) {
            if($transaction->getMerchant()->getId() == $merchant_id) {
                $results[] = $transaction;
            }
        }
    }
}
