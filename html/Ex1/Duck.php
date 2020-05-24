<?php

declare(strict_types=1);

namespace App\Ex1;

use App\Ex1\Contracts\FlyBehavior;
use App\Ex1\Contracts\QuackBehavior;

abstract class Duck
{
    public FlyBehavior $flyBehavior;

    public QuackBehavior $quackBehavior;

    public abstract function display();

    public function __construct()
    {
    }

    public function duck()
    {
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!";
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}