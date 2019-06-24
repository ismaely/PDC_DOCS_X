<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juddi_
 *
 * @author ismael_7il
 */
namespace helper\juddis;
use helper\juddis\JUDDI;
use SoapClient;
use helper\Constante;

class Juddi_ {
   
 
    
    public  static function retorno(){
        
                 $juddi = new JUDDI();
                 $juddi->conectar(USER_JUDDI, PASSWORD_JUDDI);
                 
                 $wsdl = $juddi->getBinding("SDID"); //CalculatorWS
                 
                 $wsdlRemote = str_replace("localhost",IP_JUDDI, $wsdl);
                 $cliente = new SoapClient($wsdlRemote);
                         
                 return $cliente;
    }
    
    
}