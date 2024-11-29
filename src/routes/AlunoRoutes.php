<?php

namespace routes;
use app\Controllers\AlunoController;

 class AlunoRoutes{
    private $routes = [];

    public function add($method, $action,$path){
        $this->routes[]=[
            'method'=>$method,
            'path'=>$path,
            'action'=>$action
        ];
    }
    public  function handleRequest(){
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        //verificar as rotas

        foreach($this->routes as $r){
            if($r[$method]==$method && $r['path']==$path){
                //é metodo ou função dinamica que permite invocar funções ou metodos de uma classe

                //action é atribuido que menciona "qual a classe"
                call_user_func($r['action']);
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['error'=>'Rota nao localizada']);

    }
}



?>