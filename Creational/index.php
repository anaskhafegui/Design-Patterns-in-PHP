<?php


require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy;
use DesignPatternsInPHP\Creational\FactoryMethod\DevelopmentManager;
use DesignPatternsInPHP\Creational\FactoryMethod\MarketingManager;

use DesignPatternsInPHP\Creational\AbstractFactory\CarAbstractFactroy;

use DesignPatternsInPHP\Creational\ProtoType\ManualCarProtoType;

use DesignPatternsInPHP\Creational\Builder\BurgerBuilder;

function simpleFactory()
{
    echo "Simple Factory ..." .'<br>'.'<br>';
    $luxurious = \DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy::getVehicle('Luxurious');
    echo $luxurious->call(). '<br>';

    $lowCost = \DesignPatternsInPHP\Creational\SimpleFactory\VehicleFactroy::getVehicle('Low-Cost');
    echo $lowCost->call(). '<hr>';

}


function FactoryMethod()
{
    echo "Factory Method ...." .'<br>'.'<br>';

    $devManager = new DevelopmentManager();
    echo $devManager->takeInterview() . '<br>';  // Output: Asking about design patterns

    $marketingManager = new MarketingManager();
    $marketingManager->takeInterview(); // Output: Asking about community building.
}

function AbstractFactory(){
    $carfactory = new CarAbstractFactroy(2000000);
    $bmwcar = $carfactory->createBMWCar();
    $benz = $carfactory->createBenzCar();


}

function ProtoType(){
    $ManualCarProtoTypeCar = new ManualCarProtoType();
    $newcar = clone $ManualCarProtoTypeCar;
}

function Builder()
{
    $burger = (new BurgerBuilder(14))
        ->addPepperoni()
        ->addLettuce()
        ->addTomato()
        ->build();
}

simpleFactory();
FactoryMethod();
AbstractFactory();
ProtoType();
Builder();