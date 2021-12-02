<?php

namespace PersonalProjects\DesignPattern;

use DomainException;

class Budget
{
    public float $value;
    public int $quantityItens;
    public string $state;

    public function applyExtraDiscount(): void
    {
        $this->value -= $this->calculateExtraDiscount();
    }

    private function calculateExtraDiscount (): float
    {
        if ($this->state === 'ON_APPROVAL') {
            return $this->value * .05;
        }
        
        if ($this->state === 'APPROVED') {
            return $this->value * .02;
        }

        throw new DomainException(
            "Approved and finalized budgets cannot receive discount"
        );
    }
}