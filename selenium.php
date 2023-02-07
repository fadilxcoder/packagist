<?php

namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

// This is where Selenium server 2/3 listens by default.
// For Selenium 4, Chromedriver or Geckodriver, use http://localhost:4444/
$host = 'http://localhost:4444';

$capabilities = DesiredCapabilities::chrome();

$driver = RemoteWebDriver::create($host, $capabilities);

$driver->get('https://www.google.com/ncr');

$driver->manage()->window()->maximize();

sleep(5);

$element = $driver->findElement(WebDriverBy::name("q"));

if($element) 
{
    $element->sendKeys("LambdaTest");
    $element->submit();
}

echo $driver->getTitle();
// $this->assertEquals('LambdaTest - Google Search', $this->webDriver->getTitle());
