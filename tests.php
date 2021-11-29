<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\TaxCalculator;

require "vendor/autoload.php";

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, "ISS") . PHP_EOL;