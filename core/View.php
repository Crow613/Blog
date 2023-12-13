<?php

namespace Core;

use Core\Controller;

class view
{
  public $file;
public function __construct($path,$param)
{
    
  $this->file = glob("{$param}{$path}".'/*');

}

public function respons($files)
{
  $controller = new Controller;
  $controller->respons($files);
}

}
