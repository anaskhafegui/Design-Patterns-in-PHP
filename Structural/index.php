<?php

require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Structural\Adapter\Person;
use DesignPatternsInPHP\Structural\Adapter\Kindle;
use DesignPatternsInPHP\Structural\Adapter\KindleAdapter;
use DesignPatternsInPHP\Structural\Decorator\OilChange;
use DesignPatternsInPHP\Structural\Decorator\TireRotation;
use DesignPatternsInPHP\Structural\Decorator\BasicInspection;


(new Person)->read(new KindleAdapter(new Kindle));



echo '<hr>';
$service = new OilChange(new TireRotation (new BasicInspection));

echo $service->getDescription();

