<?php 

Class Database {
    private $host = "localhost";
    private $username = "root";
    private $senha = "";
    private $banco = "login";

    public $conexao = ''; 

    public function conectar(){
        $this->$conexao = new mysqli($this->host,$this->username, $this->senha, $this->banco);

        if($this->$conexao->connect_error){
            die("Deu erro na conexão do banco" . $this->$conexao->connect_error);
        }

        return $this->conexao;
    }
}

?>