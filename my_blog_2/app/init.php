<?php

use \Illuminate\Container\Container as Container;
use \Illuminate\Support\Facades\Facade as Facade;

$base_path = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
#$app_path = $base_path . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR;
#$public_path = $base_path . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

set_include_path($base_path);
date_default_timezone_set('Asia/Ho_Chi_Minh');

// composer autoload
require_once 'vendor/autoload.php';

require_once 'app/database.php';
require_once 'app/core/App.php';
require_once 'app/core/Controller.php';

/**
* Setup a new app instance container
* 
* @var Illuminate\Container\Container
*/
$app = new Container();
$app->singleton('app', 'Illuminate\Container\Container');

/**
* Set $app as FacadeApplication handler
*/
Facade::setFacadeApplication($app);