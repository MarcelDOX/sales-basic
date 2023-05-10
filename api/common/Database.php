<?php
class Database {
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $conn;

    public function __construct() {
        $this->host = "localhost"; // endereço do servidor do banco de dados
        $this->dbname = "sales_basic"; // nome do banco de dados
        $this->user = "postgres"; // usuário do banco de dados
        $this->password = "senha"; // senha do banco de dados
        $this->conn = null;
    }

    public function connect() {
        try {
            $this->conn = new PDO("pgsql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Error connecting to database: " . $e->getMessage();
        }
    }

    public function disconnect() {
        $this->conn = null;
    }
}
?>