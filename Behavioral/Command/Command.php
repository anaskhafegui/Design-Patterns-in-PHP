<?php


namespace DesignPatternsInPHP\Behavioral\Command;


interface Command
{
    function execute();
    function undo();
    function redo();

}