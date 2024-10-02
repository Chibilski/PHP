<?php
class Conexao{
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;

    private static $pdo;

    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "agenda2";
        $this->usuario = "postgres";
        $this->senha = "1234";
    }
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("pgsql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Opção para exibir erros
            }
             echo "CONECTOU";
            return self::$pdo;
        }
        catch(PDOException $ex){
            echo "Erro de conexão: " . $ex->getMessage();
            return null; // Retorna null em caso de erro
        } 
    }
}
