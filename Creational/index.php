<?php


require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy;

function simpleFactory()
{
    $luxurious = \DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy::getVehicle('Luxurious');
    echo $luxurious->call(). '<br>';

    $lowCost = \DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy::getVehicle('Low-Cost');
    echo $lowCost->call(). '<br>';
}

simpleFactory();


