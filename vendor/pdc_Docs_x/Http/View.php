<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author ismael_7il
 */

namespace pdc_Docs_x\Http;

use Klein\ServiceProvider;


class View extends ServiceProvider{
   
    public function render($view, array $data = array()) {
        parent::render(VIEWS."/".$view, $data);
    }
    
}
