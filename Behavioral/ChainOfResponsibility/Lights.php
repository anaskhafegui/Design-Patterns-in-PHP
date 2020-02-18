<?php

namespace DesignPatternsInPHP\Behavioral\ChainOfResponsibility;

class Lights extends HomeChecker{ //makes sure lights are off
    public function check(HomeStatus $home) {
        if (! $home->lightsOff) {
            throw new Exception('Lights are not off!');
        }

        $this->next($home);
    }
}