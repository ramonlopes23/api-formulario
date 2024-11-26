<?php
namespace app\DAO;

use app\Models\Aluno;
use config\connection;
use PDO;
    class AlunoDAO{
        public $conn;
        public function __construct(){
            $database = new connection();
            $this->conn = $database->getConnection();
        }

        public function save(Aluno $aluno){
            $query = "INSERT INTO aluno (nome, genero) values (:nome,:genero)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nome", $aluno->getNome());
            $stmt->bindParam(":genero",$aluno->getGenero());
            $stmt->execute();

        }
    }


?>