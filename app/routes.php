<?php


$route->get("/","Man@Index");
$route->get("/index","Man@Index");
$route->get("/login","Man@login");

$route->get("/cadastro","Man@Cadastro");
$route->get("/editarDados","Man@editarDadosPessoal");

$route->get("/documentoExcel","Man@DocumentoExcel");
$route->get("/perfilUsuario","Man@PerfilUsuario");
$route->get("/perfilRoot","Man@perfilRoot");
$route->get("/excel","Man@ExcelAngular");

$route->get("/recebeSenha","Man@recebeSenha");

// rotas post que recebem as rotas que vem com dado pra mandar pra sd id pra inserir 
$route->post("/cadastro","Man@cadastroUtilizador");
$route->post("/login","Man@autenticarUtilizador");
$route->post("/alterar_password","Man@alterar_password");
// rotas de erro
$route->get("/erroCadastro","Man@erroCadastro");
///opt/lampp/htdocs/_PDC_DOCS_X/app/app_js/ManController.js