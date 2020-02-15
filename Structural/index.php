<?php

require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Structural\Adapter\Person;
use DesignPatternsInPHP\Structural\Adapter\Kindle;
use DesignPatternsInPHP\Structural\Adapter\KindleAdapter;


(new Person)->read(new KindleAdapter(new Kindle));