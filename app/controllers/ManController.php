<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManControllers
 *
 * @author ismael_7il
 */
namespace app\controllers;
use pdc_Docs_x\Http\Controller;
use helper\juddis\JUDDI;
use SoapClient;
use helper\juddis\Juddi_;
use helper\Constante;

//use helper\juddis\jaxSoapCliente;
class ManController extends Controller{
  
      /*
     * @ controller que vai chamar a index
     */
    public function Index(){
        $this->service->render('index.phtml');
    }
    /**
     * 
     */
     public function login(){
        $this->service->render('login.phtml');
    } 
    
    public function autenticarUtilizador(){
        
   // $klein = new Validator();
        
    
    if(!empty($_POST)):
  
           $senha=$this->request->senha;
           $nome= $this->request->nome;
           
            $dados=array("username"=>$nome,"palavraPasse"=>$senha);
            
                 $cliente= Juddi_::retorno();
                 $login = $cliente->autenticarUtilizador($dados);
                
                
                 /**
                  *  aque vamos definir qual sera o perfil a ser chamada ser o root ou usuario normal 
                  */
                 if($login):
                     $this->response->redirect("perfilUsuario")->send();
                   
                 endif;
          
       
          //   $response->back();

        else:
        
       
   endif;
   
    }

    /**
     * controller que vai chamar a tela de cadastro pra conta
     */
     public function Cadastro(){
        $this->service->render('cadastro.phtml');
    }
    
     public function alterar_password(){
             
           if(!empty($_POST)):
                $dados= array('nome'=>$this->request->passe_antiga,'username'=>$this->request->nova_passe,'nome'=>$th->request->nome);
           
           endif;
//        $this->service->render('cadastro.phtml');
    }
    /**
     * que  e o controller que vai receber  os dados do formulario pra cadatro do usario  
     */
     public function cadastroUtilizador(){
         
         
         if(!empty($_POST)):
             
             $dados= array('nome'=>$this->request->username,'username'=>$this->request->validate_username,'email'=>$this->request->validate_email,'nivel'=>1);
               $cliente= Juddi_::retorno();
                $senha = $cliente->criarConta($dados);
                 
                $ja_existe="ja existe o usuario ";
                if( $senha):
                     $this->response->redirect("perfilUsuario")->send();
                    else:
                    $this->service->render('editarDadosPessoal.phtml', $ja_existe);
                endif;
               //Conta criada a tua Palavra-passe é: 01Tt1bqI ----user dine
              
                 
                // $resultado = "(" . explode(":", $senha->return) . ")";
                // $data_temp = explode('-', $data);   $ids = "(" . implode(",", $object->ids) . ")";
                 // $nascimento = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];
                // var_dump($senha);
                 
                
                
          /**              
                 if( is_string($vrec)):
                     
                    // $this->response->redirect("/perfilUsuario",$senha )->send();
                 else:
                     
                      $this->response->redirect("/erroCadastro")->send();
                   
                      
            endif;*/
           
         else:
             
         endif;
       
        
    }
    
    
    public function erroCadastro(){
        
        echo 'erro a cadastrar usario';
    }

    /**
     * controller que vai se responsablizar pra alterar os dados do usuario
     */
     public function editarDadosPessoal(){
         
         $id=  $this->request->id;
         $dados=array();
         $this->service->render('editarDadosPessoal.phtml',$id);
    }
    
    /**
     * views responsavel por chamar a filha do documento
     */
    public function DocumentoExcel(){
        $this->service->render('documentoExcel.phtml');
    }
    
   /**
    * pra chamar o perfil do utilizador normal 
    */
    public function PerfilUsuario(){         
        $this->service->render('perfilUsuario.phtml');
    }
    /**
     * 
     */
    public function perfilRoot(){
        $this->service->render('perfilRoot.phtml');
    }
    
    
    
}
