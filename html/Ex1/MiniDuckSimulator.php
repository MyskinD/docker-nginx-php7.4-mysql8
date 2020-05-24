<?php


namespace App\Ex1;


class MiniDuckSimulator
{
    public static function main(string $args = null)
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        echo '<br>';
        $mallard->performFly();
    }
}