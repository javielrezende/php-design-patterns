<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

class Pis implements Tax
{
    public function taxCalculate(Budget $budget): float
    {
        if ($budget->value > 300 && $budget->quantityItens > 3) {
            return $budget->value * .04;
        }

        return $budget->value * .025;
    }
}