<?php

class Market {
  private $products;
  private $types;
  private $taxes;
  private $cart;
  
  public function __construct() {
    // Carrega produtos, tipos e impostos do banco de dados
    $this->products = array();
    $this->types = array();
    $this->taxes = array();
    $this->cart = array();
  }
  
  public function getProducts() {
    return $this->products;
  }
  
  public function getTypes() {
    return $this->types;
  }
  
  public function getTaxes() {
    return $this->taxes;
  }
  
  public function addToCart($product, $quantity) {
    // Adiciona produto ao carrinho
  }
  
  public function removeFromCart($product) {
    // Remove produto do carrinho
  }
  
  public function getCart() {
    return $this->cart;
  }
  
  public function getTotalPrice() {
    // Retorna o preço total da compra
  }
  
  public function getTotalTax() {
    // Retorna o imposto total da compra
  }
  
  public function checkout() {
    // Registra a venda no banco de dados
  }
}
