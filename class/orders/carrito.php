
<?php

include("producto.php");

class Carrito {
  private $items = [];
  private $total;

// ATRIBUTOS
  public function getItems(){
    return $this->items;
  }

  public function setItems(Item $item){
    $this->items[] = $item;
  }

  public function getTotal(){
    $suma = 0;
    foreach ($this->items as $item) {
      $suma = $suma + $item->getProducto()->getPrecio() * $item->getCantidad();
    }
    return $this->total = $suma;
  }



}



 ?>
