<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/kpo');
define("HELPERS", ROOT . '/vendor/kpo/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'ishop');
define("PATH", 'http://localhost');
define("ADMIN", 'http://localhost/admin');
define("NO_IMAGE", 'uploads/no_image.png');

require_once ROOT . '/vendor/autoload.php';


