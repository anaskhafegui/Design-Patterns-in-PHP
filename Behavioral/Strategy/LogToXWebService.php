<?php


namespace DesignPatternsInPHP\Behavioral\Strategy;


class LogToXWebService implements Logger
{
    public function log()
    {
        var_dump('LogToXWebSerice');
    }
}