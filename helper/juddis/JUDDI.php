<?php 

namespace helper\juddis;
//use helper\juddis\jaxSoapCliente;
use SoapClient;

class JUDDI {
    //declaração de variaveis
    private $token;
    private $businessKey;
    private $serviceKey;
    // endereco onde o juddi esta instalado
    private $SERVIDOR_JUDDI = "http://192.168.100.157:8080";
   
    //Conexão da app php com o servidor juddi
    function conectar($utilizador, $passe) {
        try {
            $wsdl = "$this->SERVIDOR_JUDDI/juddiv3/services/security?wsdl";
            $soap = new SoapClient($wsdl);
            $token = $soap->get_authToken(array('userID' => $utilizador, 'cred' => $passe));
            $this->token = $token->authInfo;
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
    
    //funçao que recebe o nome do serviço e retorna o endereço wsdl
    function getBinding($nome_servico) {
        
        $wsdl_inquiry = "$this->SERVIDOR_JUDDI/juddiv3/services/inquiry?wsdl";
        $soap_inquiry = new SoapClient("http://192.168.100.157:8080/juddiv3/services/inquiry?wsdl");        
        $servicos = $soap_inquiry->find_service(array('authInfo' => $this->token, 'name' => $nome_servico));
       
      
        //
      
        $this->businessKey = $servicos->serviceInfos->serviceInfo->businessKey;
        $this->serviceKey = $servicos->serviceInfos->serviceInfo->serviceKey;
 
        //
        $servico_info = $soap_inquiry->get_serviceDetail(
                array('authInfo' => $this->token, 'serviceKey' => $this->serviceKey));
        $binding = $servico_info->businessService->bindingTemplates->bindingTemplate->accessPoint->_;

        return $binding;
    }
}




