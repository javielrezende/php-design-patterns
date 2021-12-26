<?php

namespace PersonalProjects\DesignPattern;

use PersonalProjects\DesignPattern\BudgetStates\BudgetState;
use PersonalProjects\DesignPattern\BudgetStates\InApproval;

class Budget
{
    public float $value;
    public int $quantityItens;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new InApproval();
    }

    public function applyExtraDiscount(): void
    {
        $this->value -= $this->state->calculateExtraDiscount($this);
    }

    public function approve(Budget $budget)
    {
        $this->state->approve($this);
    }

    public function repprove(Budget $budget)
    {
        $this->state->repprove($this);
    }

    public function complete(Budget $budget)
    {
        $this->state->complete($this);
    }
}