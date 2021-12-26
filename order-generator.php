<?php

require_once 'vendor/autoload.php';

use PersonalProjects\DesignPattern\Commands\Order\OrderGenerate;
use PersonalProjects\DesignPattern\Commands\Order\OrderGenerateHandler;

$budgetQuantityItens = $argv[1];
$budgetValue = $argv[2];
$clientName = $argv[3];

$orderGenerate = new OrderGenerate(
    $budgetQuantityItens,
    $budgetValue,
    $clientName
);

$orderGeneratehandler = new OrderGenerateHandler();
$orderGeneratehandler->execute($orderGenerate);