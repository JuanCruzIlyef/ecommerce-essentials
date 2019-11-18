<?php

include("producto.php");

class Carrito {
  protected $producto;
  protected $cantidad;

  public function __construct($producto, $cantidad){
    $this->producto = $producto;
    $this->cantidad = $cantidad;
  }
// ATRIBUTOS
  public function getProducto(){
    return $this->producto;
  }
  public function setProducto($producto){
    $this->producto = $producto;
  }
  public function getCantidad(){
    return $this->cantidad;
  }
  public function setCantidad($cantidad){
    $this->cantidad = $cantidad;
  }

// METODOS
  public function sumarTotal(){
    foreach ($precio as $precios) {
     
    }
  }










}



 ?>
