<?php

require_once 'vendor/autoload.php';

use PersonalProjects\DesignPattern\Commands\Order\OrderGenerate;

$budgetQuantityItens = $argv[2];
$budgetValue = $argv[1];
$clientName = $argv[3];

$orderGenerate = new OrderGenerate(
    $budgetQuantityItens,
    $budgetValue,
    $clientName
);

$orderGenerate->execute();