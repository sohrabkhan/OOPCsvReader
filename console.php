<?php
/**
 * @author Sohrab Khan
 * @version 0.1
 */
header('Content-type: text/html; charset=utf-8');
include_once('bootstrap.php');

const CSV_FILE = "data.csv";

$report = new ReportController();
if(count($argv) == 1) { //Not arguments supplied
    $report->generateAction(CSV_FILE);
}
elseif(count($argv) == 2) { // The CSV file name has been supplied
    $report->generateAction($argv[1]);
}
elseif(count($argv) == 3) { // The CSV filename and merchant id is supplied
    $report->generateAction($argv[1], $argv[2]);
}