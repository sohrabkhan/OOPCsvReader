<?php

class CsvReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testRead()
    {
        $csvReader = new CsvReader("data.csv");
        $csvReader->read();
        $this->assertNotEmpty($csvReader->getTransactions());
    }
}