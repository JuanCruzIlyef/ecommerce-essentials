<?php

class Carrito {
  private $items = [];

  public function addProduct(Producto $producto, int $qty = 1){
    $item = new Item;
    $item->setProduct($producto);
    $item->setQty($qty);

    $this->items[] = $item;
  }

  public function getTotal(){
    $total = 0;
    foreach ($this->items as $item){
      $total = $total + $item->getTotal();
    }
    return $total;
  }



// ATRIBUTOS // 
  public function getProducto(){
    return $this->producto;
  }
  public function setProducto(producto $producto){
    $this->producto = $producto;
    // hacerlo array!!!
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
