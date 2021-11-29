<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\TaxCalculator;
use PersonalProjects\DesignPattern\Taxes\Icms;
use PersonalProjects\DesignPattern\Taxes\Iss;

require "vendor/autoload.php";

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, new Icms()) . PHP_EOL;

echo $calculator->calculate($budget, new Iss()) . PHP_EOL;