<?php/** * A typical currency service. Any sort of Currency Web Service should implement this interface * Class CurrencyService */interface CurrencyServiceInterface{    /**     * Return the currency when given currency code     *     * @param $currencyCode string     * @return Currency     */    public function getCurrency($currencyCode);    /**     * Return all the currencies     * @return array     */    public function getCurrencies();}