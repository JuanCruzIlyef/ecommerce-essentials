<?php

include("producto.php");

class Carrito {
  protected $producto;
  protected $cantidad;

  public function __construct($producto, $cantidad){
    $this->producto = $producto;
    $this->cantidad = $cantidad;
  }

  public function getProducto(){
    return $this->producto;
  }
  public function setProducto(){
    $this->producto = $producto;
  }
  public function getCantidad(){
    return $this->cantidad;
  }
  public function setCantidad(){
    $this->cantidad = $cantidad;
  }
  public function sumarTotal($precio){
    return $this->precio
  }










}



 ?>
