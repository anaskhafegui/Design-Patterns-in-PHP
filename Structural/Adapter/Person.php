<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class Person
{
    public function read($book)
    {
        $book->open();
        $book->turnPage();
    }

}