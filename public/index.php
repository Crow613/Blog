<?php

require_once  "../vendor/autoload.php";

use Mvc\core\Request;
use Mvc\core\Router;

$request = new Request;
$router = new Router($request);
