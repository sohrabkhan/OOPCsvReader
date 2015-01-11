<?php

use Currency;

/**
 * Class AutoLoaderTest
 * @author Sohrab Khan
 * @version 0.1
 */
class AutoLoaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the Autoloader is working properly and registering the files. As a test we will instantiate a Currency
     * object and see if we get a Class not found
     */
    public function testCurrency()
    {
        $currency = new Currency();
        $currency->setName("US Dollar");
        $currency->setCode("USD");
        $currency->setSymbol("$");
        $currency->setRate(0.6);

        $this->assertInstanceOf(Currency::class, $currency);
    }
}
