<?php

require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Structural\Adapter\Person;
use DesignPatternsInPHP\Structural\Adapter\Kindle;
use DesignPatternsInPHP\Structural\Adapter\KindleAdapter;
use DesignPatternsInPHP\Structural\Decorator\OilChange;
use DesignPatternsInPHP\Structural\Decorator\TireRotation;
use DesignPatternsInPHP\Structural\Decorator\BasicInspection;

use DesignPatternsInPHP\Structural\Facade\ComputerFacade;
use DesignPatternsInPHP\Structural\Facade\Computer;


(new Person)->read(new KindleAdapter(new Kindle));



echo '<hr>';
$service = new OilChange(new TireRotation (new BasicInspection));

echo $service->getDescription();
echo '<hr>';

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz