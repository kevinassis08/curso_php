<?php

class Conexao {
    public $conexao = null;

    private function __construct() {
        $this->conexao = mysqli_connect("localhost", "aluno", "1234", "curso_24");
        
        // só entra aqui se deu erro ao conectar com o banco.
        if (!$this->conexao) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}

$objConexao = new Conexao();
$objConexao->getConexao();