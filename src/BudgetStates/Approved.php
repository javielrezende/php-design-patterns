<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use PersonalProjects\DesignPattern\Budget;

class Approved
{
    public function calculateExtraDiscount (Budget $budget): float
    {
        return $budget->value * .02;
    }

    public function complete(Budget $budget)
    {
        $budget->state = new Completed();
    }
}