<?php

if(PHP_MAJOR_VERSION < 8)
{
    die("Please upgrade your PHP version");
}

require_once dirname(__DIR__) . '/config/init.php';

new \kpo\App();

echo \kpo\App::$app->getProperty('pagination') . "<br>";
\kpo\App::$app->setProperty('test', 'test');
var_dump(\kpo\App::$app->getProperties());
