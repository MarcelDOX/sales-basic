<?php

class ProductTax {
  private $id;
  private $type;
  private $tax;
  
  public function __construct($id, $type, $tax) {
    $this->id = $id;
    $this->type = $type;
    $this->tax = $tax;
  }
  
  // Getters e Setters
}
