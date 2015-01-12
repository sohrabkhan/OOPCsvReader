<?php

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
    public function testGetCurrencyWithSymbol()
    {
        $staticService = new StaticCurrencyService();
        $gbp = $staticService->getCurrency("GBP");

        $this->assertInstanceOf(Currency::class, $gbp);
        $this->assertTrue($gbp->getSymbol() == "£");

        $eur = $staticService->getCurrencyWithSymbol("€");

        $this->assertInstanceOf(Currency::class, $eur);
        $this->assertTrue($eur->getSymbol() == "€");
    }
}