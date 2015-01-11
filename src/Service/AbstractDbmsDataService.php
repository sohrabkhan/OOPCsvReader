<?php

/**
 * An abstract class which should be extended by any dataservice that uses a DBMS for retrieving the data.
 *
 * Class AbstractDbmsDataService
 */
abstract class AbstractDbmsDataService implements DataServiceInterface
{
    /**
     * @var mysqli
     */
    private $connection;
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $port, $username, $password, $database)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    /**
     * Connect to the data service
     */
    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database)
                or die("Error " . mysqli_error($this->connection));
    }

    /**
     * Disconnect from the service and release resources
     */
    public function disconnect()
    {
        $this->connection->close();
    }

    /**
     * Will run SQL Statements here and return transactions for a merchant
     *
     * @param $merchant_id int
     * @return array
     */
    public function getTransactions($merchant_id) 
    {
        //TODO
    }
}
