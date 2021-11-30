<?php

namespace PersonalProjects\DesignPattern;

use PersonalProjects\DesignPattern\Taxes\Tax;

class DiscountCalculator
{
    // If the quantity of items in the budget is greater
    // than 5, it will give a 10 % discount
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityItens > 5) {
            return $budget->value * .1;
        }

        if ($budget->value > 500) {
            return $budget->value * .05;
        }

        return 0;
    }
}