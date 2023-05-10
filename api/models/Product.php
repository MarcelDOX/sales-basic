<?php

class Product {
  private $id;
  private $name;
  private $type;
  private $price;
  
  public function __construct($id, $name, $type, $price) {
    $this->id = $id;
    $this->name = $name;
    $this->type = $type;
    $this->price = $price;
  }
  
  // Getters e Setters
}
