<?php

namespace DesignPatternsInPHP\Behavioral\ChainOfResponsibility;

class Alarm extends HomeChecker{ //makes sure alarm is off
    public function check(HomeStatus $home) {
        if (! $home->alarmOn) {
            throw new Exception('alarm is not on!');
        }

        $this->next($home);
    }
}