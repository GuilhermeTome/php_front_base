<?php

namespace Interfaces;

use CoffeeCode\Optimizer\Optimizer;

interface ControllerInterface
{
    /**
     * @return Optimizer
     */
    public function getSeo(): Optimizer;
}
