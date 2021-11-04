<?php

session_start();
require_once("vendor/autoload.php");
use Slim\Slim;
use \saes\Page;
use \saes\PageLogin;
use \saes\Model\User;

$app = new Slim();
$app->config('debug', true);

/*$app->post('/app/aluno/cadastrar', function(){
    User::verifyLogin();
    $aluno = new User();
    $_POST["concluido"] = (isset($_POST["concluido"]))?1:0;
    $aluno->setData($_POST);
    //var_dump($aluno);
    $aluno->saveAluno();
    //header('Location: /app/aluno/listagem');
    //exit;
});*/

$app->get('/', function () {
    $page = new PageLogin();
		$page->setTpl('login');
});
$app->get('/login', function () {
    $page = new PageLogin();
		$page->setTpl('login');
});

$app->get('/recuperarsenha', function () {
    $page = new PageLogin();
		$page->setTpl('forgot');
});
$app->post('/login', function() {
    User::login($_POST["email"], $_POST["password"]);
    header('Location: /app/aluno/listagem');
    exit;
});

$app->post('/', function() {
    User::login($_POST["email"], $_POST["password"]);
    header('Location: /app/aluno/listagem');
    exit;
});

$app->get('/app/aluno/listagem', function () {
    User::verifyLogin();
    $alunos = User::listAllAlunos();
    $page = new Page();
		$page->setTpl('listagem-alunos', array(
      "alunos"=>$alunos
    ));
});

$app->get('/app/logout', function () {
    User::logout();
    header('Location: /login');
    exit;
});

$app->get('/app/aluno/cadastrar', function(){
    User::verifyLogin();
    $cursos = User::listAllCursos();
    $motivos = User::listAllMotivos();
    $page = new Page();
    $page->setTpl('cadastrar-aluno', array(
      "cursos"=>$cursos,
      "motivos"=>$motivos
    ));
});

$app->get('/app/curso/cadastrar', function(){
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('cadastrar-curso');
});

$app->get('/app/motivo/cadastrar', function(){
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('cadastrar-motivo');
});

$app->post('/app/aluno/cadastrar', function(){
    User::verifyLogin();
    $aluno = new User();
    $_POST["concluido"] = (isset($_POST["concluido"]))?1:0;
    $aluno->setData($_POST);
    //var_dump($aluno->getValues());
    $aluno->saveAluno();
    //var_dump($aluno);
    header('Location: /app/aluno/listagem');
    exit;
});

$app->run();
