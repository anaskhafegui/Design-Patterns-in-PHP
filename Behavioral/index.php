<?php


require __DIR__ . './../../vendor/autoload.php';

use DesignPatternsInPHP\Behavioral\Strategy\App;
use DesignPatternsInPHP\Behavioral\Strategy\LogToFile;
use DesignPatternsInPHP\Behavioral\Strategy\LogToXWebService;

use DesignPatternsInPHP\Behavioral\Command\RemoteControl;
use DesignPatternsInPHP\Behavioral\Command\TurnOff;
use DesignPatternsInPHP\Behavioral\Command\TurnOn;
use DesignPatternsInPHP\Behavioral\Command\Bulb;
use DesignPatternsInPHP\Behavioral\Observer\EmailNotifier;
use DesignPatternsInPHP\Behavioral\Observer\LogHandler;
use DesignPatternsInPHP\Behavioral\Observer\Login;

use DesignPatternsInPHP\Behavioral\ChainOfResponsibility\Alarm;
use DesignPatternsInPHP\Behavioral\ChainOfResponsibility\Locks;
use DesignPatternsInPHP\Behavioral\ChainOfResponsibility\Lights;
use DesignPatternsInPHP\Behavioral\ChainOfResponsibility\HomeStatus;

use DesignPatternsInPHP\Behavioral\TemplateMethod\TurkeySub;
use DesignPatternsInPHP\Behavioral\TemplateMethod\VeggieSub;

$app = new App;
$app->process(new LogToXWebService);
$app->process(new LogToFile);

echo '<br>';

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
echo '<br>';
$remote->submit($turnOff); // Darkness!

$login = new Login();
$login->attach(new EmailNotifier);
$login->attach(new LogHandler);
$login->fire();


$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

//set chain
$locks->succeedWith($lights);
$lights->succeedWith($alarm);
//execute chain
$locks->check(new HomeStatus);


echo '<br>';
(new TurkeySub)->make();
echo "\n";
(new VeggieSub)->make();