<?php

use Database;

class ProductRepository {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function insert($name, $type_id, $price) {
        $stmt = $this->conn->prepare("INSERT INTO products(name, type_id, price) VALUES (:name, :type_id, :price)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':type_id', $type_id, PDO::PARAM_INT);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>