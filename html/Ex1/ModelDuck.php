<?php


namespace App\Ex1;


use App\Ex1\Behavior\FlyNoWay;
use App\Ex1\Behavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "<br>I'm a model duck";
    }
}