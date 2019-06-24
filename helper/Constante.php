<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Constante
 *
 * @author ismael_7il
 */
namespace helper;
//CONSTANTES DA BASE DE DADOS
define("HOST", '127.0.0.1'); 
define("DBSA", 'pdc_docs');  
define("USER", 'pdc_2016');      // NOME DO USARIO DA BASE DE DADOS  
define("PASS", '');  
define("URL",   'http://localhost/_PDC_DOCS_X/'); 
// Constantes que vao ser usada no juddi
define("USER_JUDDI", 'root'); 
define("PASSWORD_JUDDI", 'root');
define("IP_JUDDI", '192.168.100.157'); 


define("RAIZ", __DIR__."/..");

define("APP", RAIZ."/app");

define("MODELS", APP."/models");

define("CONTROLLERS", APP."/controllers");

define("VIEWS", APP."/views");

define("VENDOR", RAIZ."/vendor");

define("PUBLIC", RAIZ."/public");

class Constante {
 

}
