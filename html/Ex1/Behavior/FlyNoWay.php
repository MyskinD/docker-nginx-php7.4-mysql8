<?php

declare(strict_types=1);

namespace App\Ex1\Behavior;

use App\Ex1\Contracts\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "<br>I'm can't fly!";
    }
}