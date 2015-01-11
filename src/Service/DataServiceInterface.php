<?php

/**
 * The Database Service Interface gives a blueprint of what a general database service should do. This interface should
 * be implemented by every service that is supposed to retrieve data. This interface should be implemented by a
 * DbmsDataService if data is to be retrieved from mysql / oracle / mssql etc. It can be implemented by a YmlDataService
 * if data is to be retrieved from a Yml File similarly by CsvDataService if data is to be retrieved from a Csv file;
 * from a RestDataService if data is to be retrieved RESTfully.
 *
 * Interface DataServiceInterface
 * @author Sohrab Khan
 * @version 0.1
 */
interface DataServiceInterface
{
    /**
     * Connect to the data service
     */
    public function connect();

    /**
     * Disconnect from the service and release resources
     */
    public function disconnect();

    /**
     * @param $merchant_id int
     * @return array
     */
    public function getTransactions($merchant_id);
}
