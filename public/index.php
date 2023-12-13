<?php

require_once  "../vendor/autoload.php";
require dirname(__DIR__).'/core/conf/conf.php';
use Core\Request;
use Core\Router;

$file ='../view/';
$request = new Request;
$router = new Router($request,$file);
