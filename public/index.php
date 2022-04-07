<?php

namespace ERP;

use Zend\Mvc\Application;

if (PHP_SAPI === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

include_once __DIR__ . '/../vendor/autoload.php';

chdir(dirname(__DIR__));

$app = Application::init(require __DIR__ . '/../config/modules.config.php');
$app->run();