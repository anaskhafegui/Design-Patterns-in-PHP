<?php


namespace DesignPatternsInPHP\Behavioral\TemplateMethod;

class VeggieSub extends Sub {

    public function addPrimaryToppings()
    {
        var_dump('add some veggies!');
        return $this;
    }
}