<?php


namespace DesignPatternsInPHP\Behavioral\Strategy;


class App
{
    //private $logger;
    public function process(Logger $logger)
    {
        $logger->log();
    }

}