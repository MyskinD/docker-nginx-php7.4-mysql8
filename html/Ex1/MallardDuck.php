<?php

declare(strict_types=1);

namespace App\ex1;

use App\Ex1\Behavior\FlyWithWings;
use App\Ex1\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Mallard duck";
    }
}