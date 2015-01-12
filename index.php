<?php
header('Content-type: text/html; charset=utf-8');
include_once('bootstrap.php');

const CSV_FILE = "data.csv";

$report = new ReportController();
$report->generateAction(CSV_FILE, 2);
