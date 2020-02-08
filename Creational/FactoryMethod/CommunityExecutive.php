<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building';
    }
}