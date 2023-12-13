<?php

namespace Core;

use Core\Controller;

class Router
{

  public function __construct(Request $request,string $file)
  {

    $this->prepare($request,$file);

  }

  public function prepare($request,$file)
  {

    $uri = $request->uri();
    $method = $request->getMethod();
    $routes = explode('/',trim($uri));

    $controller = new Controller();

        switch ($method) {

          case 'GET':
             
           return $controller->get($routes,$file);

          break;

          case 'POST':

            return  $controller->post();

          break;

          case 'UPDATE':

            return  $controller->update($file);

          break;

          case 'DELETE':

            return  $controller->delete($file);

          break;

          default:

            return error;

          break;

          }

  }

}
