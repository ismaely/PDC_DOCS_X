<?php
    /**
      include 'jaxSoapCliente.php';
      include 'JUDDI.php';
  $nome = $_POST['validate_username'];
  $email = $_POST['validate_email'];
  $username = $_POST['username'];
          
          




$juddi = new JUDDI();
$juddi->conectar("root", "root");



$wsdl = $juddi->getBinding("CalculatorWS");
$wsdlRemote = str_replace("localhost", "192.168.1.101", $wsdl);
$cliente = new SoapClient($wsdlRemote);

$vrec = $cliente->criarConta(Array('nome' => $nome, 'username' => $username, 'email' => $email));
print_r($vrec);
*/