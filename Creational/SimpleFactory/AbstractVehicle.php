<?php

namespace DesignPatternsInPHP\Creational\SimpleFactory;

abstract class AbstractVehicle
{
    protected $cars = [];

    function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    abstract public function call();
}