<?php
namespace DesignPatternsInPHP\Creational\FactoryMethod;

class MarketingManager extends HiringManager
{

    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }

}