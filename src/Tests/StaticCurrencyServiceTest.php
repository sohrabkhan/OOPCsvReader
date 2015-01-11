<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 11/01/2015
 * Time: 13:39
 */

/**
 * Tests for the Static Currency Service
 * @author Sohrab Khan
 * @version 0.1
 */
class StaticCurrencyServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests the static currency service if it's working properly
     */
    public function testGetCurrencies()
    {
        $staticService = new StaticCurrencyService();
        $staticService->getCurrencies();

        $this->assertNotEmpty($staticService->getCurrencies());
        $this->assertCount(3, $staticService->getCurrencies());
    }

    /**
     * Test the static currency service's getcurrency method
     */
    public function testGetCurrency()
    {
        $staticService = new StaticCurrencyService();
        $gbp = $staticService->getCurrency("GBP");

        $this->assertInstanceOf(Currency::class, $gbp);
        $this->assertTrue($gbp->getSymbol() == "£");
    }
}