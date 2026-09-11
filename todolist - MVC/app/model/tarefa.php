<?php 

class Tarefa {

    private $conexao;

    public function __construct(){
        $db = new Database();
        $this->conexao = $db->conectar();
    }
}
?>