<?php

declare(strict_types=1);

namespace App\Ex1\Behavior;

use App\Ex1\Contracts\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "<br>Quack";
    }
}