<?php


require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Behavioral\Strategy\App;
use DesignPatternsInPHP\Behavioral\Strategy\LogToFile;
use DesignPatternsInPHP\Behavioral\Strategy\LogToXWebService;

$app = new App;
$app->process(new LogToXWebService);
$app->process(new LogToFile);
