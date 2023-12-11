<?php

namespace Mvc\core;

class Response
{

  public function __construct($path)
  {
     
    include($path);

  }

}
