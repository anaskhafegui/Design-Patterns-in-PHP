<?php


namespace DesignPatternsInPHP\Behavioral\TemplateMethod;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('add someturkey!');
        return $this;
    }
}