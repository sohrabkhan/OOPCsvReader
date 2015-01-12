<?php
/**
 * @author Sohrab Khan
 * @version 0.1
 */
include_once('bootstrap.php');

const CSV_FILE = "data.csv";

if(count($argv) == 1) { //Not arguments supplied
    throw new \InvalidArgumentException();
}

if(count($argv) == 2) {
    $report = new ReportController();
    $report->generateAction($argv[1]);
}