<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author ismael_7il
 */

namespace pdc_Docs_x\Routing;


use Klein\Klein as Klein;

class Route extends Klein{
    
    //App\\Controllers\\Controller@Action
    /**
     * responsavel por tratar a url 
     * @param type $route
     * @param type $call
     */
    public function get($route="*",$call=null){
        
        if(is_string($call)){
            $explode = explode("@", $call);
            $controller="app\\controllers\\".$explode[0]."Controller";
            $action = $explode[1];
           
            $this->respond("GET",$route, function($request, $response, $service, $app) use ($controller, $action){
              
                $class = new $controller();
               $class->__mostra($request, $response, $app);
               return $class->$action();
            });
            
            
        }else{
            $this->respond("GET", $route,$call);
        }
    }
    
   /**
    * responsavael POR RECEBER OS DADOS QUE VEM DO CONTROLLER VIA POST 
    * @param type $route
    * @param type $call
    */
    public function post($route="*",$call=null){
        
        if(is_string($call)){
            $explode = explode("@", $call);
            $controller="app\\controllers\\".$explode[0]."Controller";
            $action = $explode[1];
           
            $this->respond("POST",$route, function($request, $response, $service, $app) use ($controller, $action){
            
               $class = new $controller();
               $class->__mostra($request, $response, $app);
               return $class->$action();
            });
        
            
        }else{
            $this->respond("POST", $route,$call);
        } 
    }
    
}
