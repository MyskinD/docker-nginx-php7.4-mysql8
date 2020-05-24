<?php

declare(strict_types=1);

namespace App\Ex1\Behavior;

use App\Ex1\Contracts\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying!";
    }
}