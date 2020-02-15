<?php


namespace DesignPatternsInPHP\Behavioral\Strategy;


class LogToFile implements Logger
{
    public function log()
    {
        var_dump('LogToFile');
    }
}
