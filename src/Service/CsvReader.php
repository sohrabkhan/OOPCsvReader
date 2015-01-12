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

        $count = 0;
        while (($fields = fgetcsv($file, 0, ";")) !== FALSE) {

            //Skip the first row as it's the name of the columns
            if(++$count == 1) continue;

            $transaction = new Transaction();
            $transaction->setMerchant(new Merchant($fields[0]));
            $transaction->setDate($fields[1]);

            $amount = $fields[2];
            $currencyCode = $this->extractCurrencySymbol($amount);
            $currency = $currencyService->getCurrencyWithSymbol($currencyCode);

            $transaction->setCurrency($currency);
            $transaction->setAmount($this->extractNumbers($amount));
            $this->transactions[] = $transaction;
        }

        fclose($file);
    }

    private function extractCurrencySymbol($string)
    {
        preg_match_all('/[£\$€]+/', $string, $match);
        return $match[0][0];
    }

    private function extractNumbers($string)
    {
        preg_match_all('!\d+(?:\.\d+)?!', $string, $match);
        return $match[0];
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