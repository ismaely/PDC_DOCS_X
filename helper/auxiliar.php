<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* função que pega a url que podem ser usada nos links*/

function url(){
    $ponto=  strtolower(preg_replace("/[^a-zA-Z\s]/", '', $_SERVER["SERVER_PROTOCOL"]));
    $server_name=$_SERVER["SERVER_NAME"];
    $port=$_SERVER["SERVER_PORT"]=="80" ? "":":".$_SERVER["SERVER_PORT"];
    $sceriptname=  str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);
    $request_url = $_SERVER["REQUEST_URI"];
    
    return "{$ponto}://{$server_name}{$port}{$sceriptname}";
}

function assets($file){
    
     
}