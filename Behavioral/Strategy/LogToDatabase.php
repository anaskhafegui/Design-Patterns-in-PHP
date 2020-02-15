<?php


namespace DesignPatternsInPHP\Behavioral\Strategy;


class LogToDatabase implements Logger
{
    public function log()
    {
        var_dump('LogToDatabase');
    }

}