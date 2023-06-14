<?php
    use setup\config\Router;
    use devise\Service\Service;
    require_once __DIR__.'/../vendor/autoload.php';

    // menambahkan register autoloader
    new setup\config\bootstrap();

    Router::add('GET', '/', Service::class, 'index');
    Router::add('GET', '/test', \devise\Service\Service::class, 'test');
    Router::add('GET', '/test2', \devise\Service\Test::class, 'index');
    Router::run(); 