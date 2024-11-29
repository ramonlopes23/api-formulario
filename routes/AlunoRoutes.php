<?php

namespace routes;
use app\Controllers\AlunoController;

 class AlunoRoutes{
    private $routes = [];

    public function add($method, $action,$path){
        $this->routes[]=[
            'method'=>$method,'path'=>$path,'action'=>$action
        ];
    }
    public  function handleRequest(){
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        
    }
}



?>