<?php

namespace Mvc\core;

use Mvc\controller\ControllerConf;

class Router
{

  public Request $request;

  public function __construct(Request $request)
  {

    $this->request = $request;
    $this->prepare($request);

  }

  public function prepare($request)
  {

    $uri = $request->uri();
    $method = $request->getMethod();
    $file = dirname(__DIR__)."/view{$uri}.html";

     if(file_exists($file)){

        $controllerConf = new ControllerConf();

        switch ($method) {

          case 'GET':

           return $controllerConf->getMethods($file);

          break;

          case 'POST':

            return  $controllerConf->postMethods();

          break;

          case 'UPDATE':

            return  $controllerConf->updateMethods($file);

          break;

          case 'DELETE':

            return  $controllerConf->deleteMethods($file);

          break;

          default:

            return error;

          break;
          
          }

        }else {

          include dirname(__DIR__).'/view/blog/blog.html';
          exit;

        }

  }

}
