<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class TireRotation implements CarService
{
    protected $CarService;

    public function __construct(CarService $CarService)
    {
        $this->CarService = $CarService;
    }

    public function getCost()
    {
        return 20 + $this->CarService->getCost();
    }

    public function getDescription()
    {
        return $this->CarService->getDescription() . " and Tire Rotation";
    }


}