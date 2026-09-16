<?php 

require_once __DIR__ . '/../config/database.php';

class Tarefa {

    private $conexao;

    public function __construct(){
        $db = new Database();
        $this->conexao = $db->conectar();
    }

    #listar
    public function listar(){
        $tarefas = [];
        $sql = "SELECT * FROM tabelas ORDER BY data_criacao DESC";
        $resultado = $this->conexao->query($sql);

        if($resultado->num_rows>0){
             while($row = $resultado->fetch_assoc()){
                 $tarefas[] = $row;
             }
        }
        
        return $tarefas;
    }

    #criar

    public function criar($descricao){
        $descricao = $this->conexao->real_escape_string($descricao);
        $sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
        return $this->conexao->query($sql);
    }
    
    #excluir
    public function excluir($id){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE $id = $id";
        return $this->conexao->query($sql);
    }
}
?>