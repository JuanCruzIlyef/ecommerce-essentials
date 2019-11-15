<?php

class Ecommerce{
  private $carrito;
  private $usuario;
  private $catalogo = [];

  public function __contruct(){
    $this->carrito = new Carrito;
  }

  public function getProducts(){
    for ($i = 0; $i < rand(20, 30); $i++){
      $producto = new Producto;
      $producto->setPrice(rand(99, 1000));
      $catalogo[] = $producto;
    }
    return $this->catalogo;
  }
  public function addProducto(Producto $producto, int $qty = 1){
    $this->$carrito->addProducto($producto, 3);
  }
public function findProduct(int $id){
    foreach ($this->catalogo as $product){
      if ($producto->getId() === $id){
        return $product;
      }
    }
  }
  public function register(array $data){ //email password etc
    //creo un usuario
  }

  public function login(array $data){
    // guarda sesion
  }
}




 ?>
