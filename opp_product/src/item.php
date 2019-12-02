<?php

class Item {
  private $carrito;
  private $producto;
  private $cantidad;
  private $total;
// planteado para una linea de carrito

public function setProducto(Producto $product){
  $this->product = $product;
}
public function setQty(int $qty = 1){
  $this->qty = $qty;
}

  public function getTotal(){
    return $this->producto->getPrice() * $this->qty;
  }
}
?>