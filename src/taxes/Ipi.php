<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

class Ipi implements Tax
{
    public function taxCalculate(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * .03;
        }

        return $budget->value * .02;
    }
}