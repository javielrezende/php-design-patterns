<?php

namespace PersonalProjects\DesignPattern\Commands\Order\Actions;

class GenerateLog
{
    public function execute()
    {
        echo "Writes log " . PHP_EOL;
    }
}