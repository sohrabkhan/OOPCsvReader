<?php

/**
 * This class is used to read a CSV file. It is used by the CsvDataService to read CSV files.
 */
class CsvReader
{
    /**
     * @var string
     */
    private $content;
    private $transactions;

    /**
     * @param $content string
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    public function parse()
    {

    }
}