<?php

namespace PersonalProjects\DesignPattern\Commands\Order;

use DateTimeImmutable;
use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\Commands\Command;
use PersonalProjects\DesignPattern\Order;

class OrderGenerate implements Command
{
    private int $budgetQuantityItens;
    private float $budgetValue;
    private string $clientName;

    public function __construct(
        int $budgetQuantityItens,
        float $budgetValue,
        string $clientName
        )
    {
        $this->budgetQuantityItens = $budgetQuantityItens;
        $this->budgetValue = $budgetValue;
        $this->clientName = $clientName;
    }

    public function execute()
    {
        $budget = new Budget();
        $budget->quantityItens = $this->budgetQuantityItens;
        $budget->value = $this->budgetValue;

        $order = new Order();
        $order->completedDate = new DateTimeImmutable();
        $order->clientName = $this->clientName;
        $order->budget = $budget;

        echo "Create order in database " . PHP_EOL;
        echo "Send e-mail " . PHP_EOL;
    }
}