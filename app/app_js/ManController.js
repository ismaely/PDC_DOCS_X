/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app =angular.module('pdc_app',[]);


/** controller pra o login que vai fazer a requisao
 * 
 * @param {type} param1
 * @param {type} param2
 */


//controller responsavel por passar os dados que serao pra o login

app.controller('loginCtrl',function($scope,$http){
    
        $scope.submit=function(){  
       
        $http({
            method:"POST",
            url:'http://localhost/_SD-ID/app/controller/Controller_Autenticar.php',
            data:{ 
            nome:$scope.nome,
            senha:$scope.senha
            }, 
        
        }).then(function successCallback(response){
               
               
              
                if(response.data==1){
                   // $scope.msg="dentro";
                    window.location= "perfilUsuario";
                   
               }else{
                    $scope.dc =response.data;
               }
              
            },
             function errorCallback(response){
                $scope.dc=response.data;
        });
        }
}); 

//controller que passa os dados pra cadastro do usario
app.controller('cadastroCtrl',function($scope,$location, $http){
    
       
         
     $scope.submit=function(){
        
        $http({
            method:"POST",
            url:'http://localhost/_SD-ID/app/controller/Controller_Cadastro.php',
            data:{ 
            nome:$scope.nome,
            nome_utilizador:$scope.nome_utilizador,
            senha:$scope.senha,
            email:$scope.email,
            //mobile:android 
            },  
        
          
        }).then(function successCallback(response){
                $scope.rec= json_decode(response.data);
              // $scope.opcao =response.statusText ;
               
               if($scope.valor==1){
                   
                   return 1;
                   window.location= "perfilUsuario";
               
                  
               }else{
                    $scope.msg="tud "+$scope.valor;
               }
            }, function errorCallback(response){
                $scope.msg="falha na conexao";
        });
            
}
       
});

app.controller("perfilDefinir", function ($scope) {
   $scope.submit=function(){
     
      
      if($scope.def_linha > 0 && $scope.def_coluna > 0 ){
          window.sessionStorage.setItem('def_linha', JSON.stringify($scope.def_linha));
          window.sessionStorage.setItem('de_coluna', JSON.stringify($scope.def_coluna));
         
         // $scope.msg="dentro com sucesso";
          window.location= "documentoExcel";
         
      }
            
}


});

app.controller("recebeLinhaColuna", function ($scope) {
    
         $scope.de_linha=JSON.parse(window.sessionStorage.getItem('def_linha'));
         $scope.de_coluna=JSON.parse(window.sessionStorage.getItem('de_coluna'));
         
        // window.sessionStorage.removeItem('people');
         
        
});

