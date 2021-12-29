<?php

namespace PersonalProjects\DesignPattern\Commands\Order;

use DateTimeImmutable;
use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\Commands\Order\Actions\CreateOrderDatabase;
use PersonalProjects\DesignPattern\Commands\Order\Actions\GenerateLog;
use PersonalProjects\DesignPattern\Commands\Order\Actions\SendMail;
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

        $createOrderDatabase = new CreateOrderDatabase();
        $createOrderDatabase->execute();
        
        $sendMail = new SendMail();
        $sendMail->execute();
        
        $generateLog = new GenerateLog();
        $generateLog->execute();
    }
}