<?php


namespace DesignPatternsInPHP\Behavioral\Command;



class Bulb
{
    public function turnOn()
    {
        echo "Bulb has been lit";
    }

    public function turnOff()
    {
        echo "Darkness!";
    }

}