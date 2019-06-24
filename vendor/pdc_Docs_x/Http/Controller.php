<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author ismael_7il
 */
namespace pdc_Docs_x\Http;


class Controller {
    //put your code here
    
    protected $request;
    protected $response;
    protected $service;
    protected $app;
    
    public function __mostra($request, $response,  $app){
        $this->request=$request;
        $this->response=$response;
        /* @var $response type */
        $this->service= new View($request, $response);
        $this->app=$app;
    }
}
