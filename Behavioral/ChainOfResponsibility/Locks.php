<?php

namespace DesignPatternsInPHP\Behavioral\ChainOfResponsibility;

class Locks extends HomeChecker{ //makes sure door is locked
    public function check(HomeStatus $home) {
        if (! $home->locked) {
            throw new Exception('Doors not locked!');
        }

        $this->next($home);
    }
}