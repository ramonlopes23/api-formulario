<?php

namespace app\Controllers;
use app\Services\AlunoService;

class AlunoController{

    private $service;

    public function __construct(){
        $service = new AlunoController;
    }

    public function criar(){
        $data = json_encode(file_get_contents("php://input"));
        echo json_encode(["id"=>$this->service->criar($data->nome,$data->genero)]);
    }
}




?>