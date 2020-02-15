<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class OilChange implements CarService
{

    protected $CarService;

    public function __construct(CarService $CarService)
    {
        $this->CarService = $CarService;
    }
    public function getCost()
    {
       return 50 + $this->CarService->getCost();
    }
    public function getDescription()
    {
        return $this->CarService->getDescription() . " and OilChange";
    }

}