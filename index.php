<?php

$loader = require_once __DIR__ . '/vendor/autoload.php';

use Silex\Application;

$app = new Application();

/*
  Ou -> $app = new Silex\Application();
 */

$app->get('/', function () {
    return 'Olá Mundo';
});
$app->run();
