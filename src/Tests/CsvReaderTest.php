<?php

class CsvReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testRead()
    {
        $csvReader = new CsvReader(__DIR__ . "data.csv");
        $this->assertInstanceOf(CsvReader::class, $csvReader);
        //$csvReader->read();
        //$this->assertNotEmpty($csvReader->getTransactions());
    }
}