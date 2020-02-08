<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;
class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}