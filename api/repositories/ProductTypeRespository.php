<?php

use Database;

class ProductTypeRepository {
    private $conn;

    public function __construct() {
        $connection = new Database();
        $this->conn = $connection->connect();
    }

    public function insert($name, $tax_percentage) {
        $stmt = $this->conn->prepare("INSERT INTO product_types(name, tax_percentage) VALUES (:name, :tax_percentage)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':tax_percentage', $tax_percentage, PDO::PARAM_STR);
        return $stmt->execute();
    }
    
    public function findAll(): array
    {
        $stmt = $this->conn->query('SELECT * FROM product_types');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>