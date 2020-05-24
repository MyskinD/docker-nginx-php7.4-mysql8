<?php


namespace App\Ex1;


use App\Ex1\Behavior\FlyRockedPowered;

class MiniDuckSimulator
{
    public static function main(string $args = null)
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();

        echo "<br>----------------------------------------";

        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRockedPowered());
        $model->performFly();
    }
}