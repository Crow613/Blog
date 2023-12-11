<?php

namespace Mvc\controller;

use App\Controllers\Controllers;
use Mvc\core\Response;

class Controller
{

  public function  getMethod($path)
  {

    return new Response($path);

  }

  public function postMethod($path)
  {

      return new Response($path);

  }


}
