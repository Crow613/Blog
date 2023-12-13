<?php

namespace Core;

use App\http\Controllers\Controllers;
use Core\Response;
use Core\View;

class Controller
{

  public function  get(array $routes,string $file)
  {

    $controllers = new Controllers();
    $method1 = $routes[1];

    if(file_exists($file.$method1.'/')){

     $method = $routes[2];

    if(method_exists($controllers,$method)){

         $view = new View($method1,$file);
         $path = $view->file;
         $files = "{$file}{$method1}/{$method}";

         return $controllers->$method($path,$files);

      }

    }else{

          if(method_exists($controllers,$method1)){

             $view = new View($method,$file);
             $path = $view->file;
             $files = "{$file}{$method1}";

              return $controllers->$method1($path,$files);

          }

    }

  }

  public function post()
  {

      die('hi post method');

  }
  public function update()
  {
    // code...
  }

  public function delete()
  {
    // code...
  }
  public  function view($file)
  {

    return new Response($file);

  }

}
