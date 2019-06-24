<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jaxSoapCliente
 *
 * @author Justino
 */
namespace helper\juddis;

class jaxSoapCliente extends SoapClient{
    //put your code here
    public function __call($function_name, $arguments) {
        $recebe =parent::__call($function_name, $arguments);
        return $recebe->return;
    }
}
