<?php

/**
 * Class AbstractFileDataService
 */
abstract class AbstractFileDataService implements DataServiceInterface
{
    /**
     * The content of the file
     * @var string
     */
    private $filename;

    /**
     * Initialize
     * @param $filename string
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Connect to the data service. Should be used by DBMS etc.
     */
    public function connect()
    {
        // TODO: Implement connect() method.
    }

    /**
     * Disconnect from the service and release resources
     */
    public function disconnect()
    {
        $this->filename = NULL;
    }
}
