<?php 

require_once __DIR__ . '/../config/database.php';

    Class Usuario { 

private $conexao;  

     public function __construct() {
         $database = new Database();
         $this->$conexao = $database->conectar();
       }  

    public function buscarPorEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->$conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }







}

?>