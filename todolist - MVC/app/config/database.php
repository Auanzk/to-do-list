<?php 


class Database {
    private $localhost = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'todolist';

    public $conexao = '';

    public function conectar(){
    $this->coneexao = new mysqli($this->localhost, $this->usuario, $this->senha, $this->banco);
    if($this->conexao->connect_error);
        die("algo deu errado" . $this->conexao->connect_error);
    }

    

}
?>   