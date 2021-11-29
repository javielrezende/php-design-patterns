<?php

namespace PersonalProjects\DesignPattern;

class TaxCalculator
{
    public function calculate(Budget $budget, string $taxName): float
    {
        switch ($taxName) {
            case "ICMS":
                return $budget->value * .1;
            case "ISS":
                return $budget->value * .06;
        }
    }

}