<?php


namespace DesignPatternsInPHP\Behavioral\Observer;


interface Subject
{
    function attach($observable);
    function detach($index);
    function notify();
}