<?php
/**
 * @author Sohrab Khan
 * @version 0.1
 */
include_once('bootstrap.php');

$currency = new Currency();
$currency->setCode("GBP");
$currency->setRate(1.5);

var_dump($currency);
