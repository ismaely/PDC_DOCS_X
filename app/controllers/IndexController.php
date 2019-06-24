<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author ismael_7il
 */

namespace App\Controllers;
use pdc_Docs_x\Http\Controller;

class indexController extends Controller{
    
    /*
     * @ controller que vai chamar a index
     */
    public function Index(){
        $this->service->render('index.phtml');
    }
    
    /**
     * controller que vai chamar a tela de cadastro pra conta
     */
     public function Cadastro(){
        $this->service->render('cadastro.phtml');
    }
    /**
     * que vai redirecionar os dados recebido 
     */
     public function CadastroPost(){
         print_r($_POST);
        //$this->service->render('');
    }
    /**
     * controller que vai se responsablizar pra alterar os dados do usuario
     */
     public function editarDadosPessoal(){
         
         $id=  $this->request->id;
         $dados=array();
         $this->service->render('editarDadosPessoal.phtml',$dados);
    }
    
   
    
}
