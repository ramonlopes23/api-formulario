<?php


require_once '../vendor/autoload.php';

use routes\AlunoRoutes;
use app\Controllers\AlunoController;

//definindo rotas
$router = new Routes;

//definindo rotas
$router->add('POST','api/aluno', [new AlunoController(),['criar']]);

$router->add('GET','/hello', [new AlunoController(),['Hello']]);

$router->handleRequest();







?>