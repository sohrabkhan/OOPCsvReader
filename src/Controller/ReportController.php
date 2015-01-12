<?php

/**
 * Controller for generating merchant transactions report
 */
class ReportController {
    /**
     * The action to generate a report
     *
     * @param $fileName string
     * @param $merchantId integer
     */
    public function generateAction($fileName, $merchantId = 0)
    {
        $csvReader = new CsvReader($fileName);
        var_dump($csvReader);
        $csvDataService = new CsvDataService($csvReader);
        $transactions = $csvDataService->getTransactions($merchantId);

        require "src/View/report_generate.html.php";
    }
}