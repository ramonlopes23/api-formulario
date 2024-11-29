<?php
namespace app\Services;
use app\DAO\AlunoDAO;
use app\Models\Aluno;
use app\DAO;


    class AlunoService{
        private $dao;
        public function __construct(){
            $this->dao = new AlunoDAO();
        }
        public function criar($nome, $genero){
            $aluno = new Aluno ($nome, $genero);
            $this-> dao->save($aluno);

            return['success'=>'Aluno criado com sucesso'];
        }
    }




?>