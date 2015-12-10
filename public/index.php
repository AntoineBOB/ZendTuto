<?php

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
//require __DIR__.'/../module/MiniModule/src/IndexControlleur.php';

Zend\Mvc\Application::init(require('config/application.Config.php'))->run();
        