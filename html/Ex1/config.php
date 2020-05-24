<?php

# Паттерн СТРАТЕГИЯ
# Определяет семейство алгоритмов, инкапсулирует каждый из них и обеспечивает их взаимозаменяемость.
# Он позволяет модифицировать алгоритмы независимо от их использования на стороне клиента.
#
# Для реализации разных вариантов поведения используется паттерн СТРАТЕГИЯ. Т.е. поведение инкапсулируется
# в отдельном наборе классов, который легко расширяется и изменяется - при необходимости даже во время выполнения.

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