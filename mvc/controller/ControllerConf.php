<?php

namespace Mvc\controller;

use Mvc\controller\Controller;
use Mvc\model\Model;

class ControllerConf
{

  public function getMethods(string $path)
  {

    $route = explode('/', $path);

    if($route[5] === 'admin'){

        include '../mvc/view/blog/blog.html';

           exit;

    }elseif($route[5] === 'after'){

       include '../mvc/view/blog/blog.html';

    }else{

     $controller = new Controller;

     if(file_exists($path)){

        return $controller->getMethod($path);

     }elseif(file_exists($path)){

       return $controller->getMethod($path);

    }else{

       include '../mvc/view/blog/blog.html';

    }

    }

  }

  public function postMethods()
  {

   $after = glob(dirname(__DIR__).'/view/after'. '/*');
   $admin = glob(dirname(__DIR__).'/view/admin'. '/*');
   $model = new Model();
   $method = $model->table($_POST['name']);



   if($method === 'after'){
      $afterMethod = $method;
     if(method_exists($model, $afterMethod)){

      return $model->$method($after);

    }

  }elseif($method === 'admin'){
       $adminMethod = $method;
      if(method_exists($model, $method)){

       return $model->$method($admin);

      }
    }

  }

  public function updateMethods()
  {
    // code...
  }


  public function deleteMethods()
  {


  }

}
