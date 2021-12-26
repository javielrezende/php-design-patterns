<?php

require_once 'vendor/autoload.php';

use PersonalProjects\DesignPattern\{Budget, Order};

$budgetValue = $argv[1];
$budgetQuantityItens = $argv[2];
$clientName = $argv[3];

$budget = new Budget();
$budget->quantityItens = $budgetQuantityItens;
$budget->value = $budgetValue;

$order = new Order();
$order->completedDate = new DateTimeImmutable();
$order->clientName = $clientName;
$order->budget = $budget;

echo "Create order in database " . PHP_EOL;
echo "Send e-mail " . PHP_EOL;