<?php

 //require_once "./api/conf.php";
 require_once "vendor/autoload.php";
 
 


$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 

    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

use pdc_Docs_x\Routing\Route;
use helper\Constante;


 $route = new Route();
 $x = new Constante();
 require_once APP."/routes.php";
 

//print_r($route);
  //echo APP;
  
  //echo dirname(dirname(__FILE__));
 return $route;
 