<?php
/**
 * Created by PhpStorm.
 * User: sohra_000
 * Date: 12/01/2015
 * Time: 11:01
 */

class CsvDataServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check if the getTransactions() method is retrieving all the transactions properly for a merchant. We are
     * getting transactions for Merchant with ID 2 & test if the number of transactions are 4
     */
    public function testGetTransactions()
    {
        $csvReader = new CsvReader("data.csv");
        $csvReader->read();
        $csvDataService = new CsvDataService($csvReader);
        $this->assertInstanceOf(CsvDataService::class, $csvDataService);
        $transactions = $csvDataService->getTransactions(2);
        $this->assertTrue(count($transactions) == 4);
    }
}