<?php
require_once __DIR__.'/../vendor/autoload.php';

require __DIR__ . '/../src/Container.php';

$container = new Container;

require __DIR__ . '/../src/Invoise/Controllers.php';

$app = $container->getApp();

$app->run();
