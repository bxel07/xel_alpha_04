<?php
    use setup\config\Router;
    use devise\Service\Service;
    require_once __DIR__.'/../vendor/autoload.php';

    Router::add('GET','/', Service::class,'index');
    Router::run(); 
