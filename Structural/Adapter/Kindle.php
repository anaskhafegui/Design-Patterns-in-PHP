<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('Turn the Kindle On');
    }
    public function PressNextButton()
    {
        var_dump('Press Nex Button of the kindle page');
    }

}