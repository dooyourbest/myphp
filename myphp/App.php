<?php

/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2017/3/19
 * Time: 21:31
 */
use core;
class App{
  function go(){
      $route=new \core\Route();
      $route->parse_request();
  }

}