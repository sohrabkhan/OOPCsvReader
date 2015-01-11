<?php

/**
 * This class is used to read a CSV file. It is used by the CsvDataService to read CSV files. A similar class can be
 * created to write to CSV. Following the 'S' in SOLID principles I've broken down the reading and writing to separate
 * classes as One class should have one responsibility
 */
class CsvReader
{
    /**
     * The CSV filename to read from
     * @var string
     */
    private $filename;
    /**
     * The array of Transactions which are read from the CSV file.
     * @var array
     */
    private $transactions;

    /**
     * @param $filename string
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->transactions = array();
    }

    /**
     * Read the CSV file and create Transaction Objects adding each to the transactions array
     */
    public function read()
    {
        $currencyService = new StaticCurrencyService();

        $file = fopen($this->filename, "r");

        // Skip the first row as it's the name of the columns
        //var_dump(fgetcsv($file));


        while(! feof($file))
        {
            $row = fgetcsv($file, );
            var_dump($row);
            echo "<br>";
            $transaction = new Transaction();
            $transaction->setMerchant(new Merchant($row[0]));
            $transaction->setDate($row[1]);

            $amount = $row[2];
            $currency = $currencyService->getCurrency(substr($amount, 0, 1));
            $transaction->setCurrency($currency);
            $transaction->setAmount(substr($amount, 1));
            $this->transactions[] = $transaction;
        }

        fclose($file);
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the CSV file's filename. After this method the read method should be called to re-read the new file's
     * contents.
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param array $transactions
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

}