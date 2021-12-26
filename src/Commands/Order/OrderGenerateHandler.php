<?php

namespace PersonalProjects\DesignPattern\Commands\Order;

use DateTimeImmutable;
use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\Order;

class OrderGenerateHandler
{
    public function __construct(
        // OrderRepository
        // MailService
        // LogWriter
        )
    {
        //
    }

    public function execute(OrderGenerate $orderGenerate)
    {
        $budget = new Budget();
        $budget->quantityItens = $orderGenerate->getBudgetQuantityItens();
        $budget->value = $orderGenerate->getBudgetValue();

        $order = new Order();
        $order->completedDate = new DateTimeImmutable();
        $order->clientName = $orderGenerate->getClientName();
        $order->budget = $budget;

        // OrderRepository
        echo "Create order in database " . PHP_EOL;
        
        // MailService
        echo "Send e-mail " . PHP_EOL;
        
        // LogWriter
        echo "Writes log " . PHP_EOL;
    }
}