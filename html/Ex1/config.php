<?php

# Паттерн СТРАТЕГИЯ
# Определяет семйствоалгоритмов, инкапсулирует каждый из них и обеспечивает их взаимозаменяемость.
# Он позволяет модифицировать алгоритмы независимо от их использования на стороне клиента.

require dirname(__DIR__) . "/Ex1/Contracts/FlyBehavior.php";
require dirname(__DIR__) . "/Ex1/Contracts/QuackBehavior.php";
require dirname(__DIR__) . "/Ex1/Behavior/FlyWithWings.php";
require dirname(__DIR__) . "/Ex1/Behavior/FlyRockedPowered.php";
require dirname(__DIR__) . "/Ex1/Behavior/FlyNoWay.php";
require dirname(__DIR__) . "/Ex1/Behavior/MuteQuack.php";
require dirname(__DIR__) . "/Ex1/Behavior/Quack.php";
require dirname(__DIR__) . "/Ex1/Behavior/Squeak.php";
require dirname(__DIR__) . "/Ex1/Duck.php";
require dirname(__DIR__) . "/Ex1/MallardDuck.php";
require dirname(__DIR__) . "/Ex1/ModelDuck.php";
require dirname(__DIR__) . "/Ex1/MiniDuckSimulator.php";