<?php


namespace App\Ex1\Behavior;


use App\Ex1\Contracts\FlyBehavior;

class FlyRockedPowered implements FlyBehavior
{
    public function fly()
    {
        echo "<br> I'm flying with a rocket!";
    }
}