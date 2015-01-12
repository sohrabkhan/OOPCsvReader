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
        if(!file_exists($fileName)) {
            throw new NotFoundException("The file $fileName does not exist. Kindly supply the name of a file that exist");
        }
        $csvReader = new CsvReader($fileName);
        // Read the file
        $csvReader->read();
        $csvDataService = new CsvDataService($csvReader);
        $transactions = $csvDataService->getTransactions($merchantId);
        if(count($transactions) > 0) {
            require "src/View/report_generate.html.php";
        }
        else {
            echo "No transactions found";
        }
    }
}