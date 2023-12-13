<?php

namespace App\http\Controllers;

use Core\Controller;

class Controllers
{

  public function blog($path,$files)
  {

     return $controller->view(fileMethod($path,$files));
     $controller = new Controller();

  }

  public function login($path,$files)
  {
    
    $controller = new Controller();
     return $controller->view(fileMethod($path,$files));

  }

}
