<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('opening the paper page');
    }
    public function turnPage()
    {
        var_dump('tuning the page of the paper page');
    }

}