<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('Fire email');
    }
}