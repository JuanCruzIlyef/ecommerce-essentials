<?php

require "producto.php";
require "carrito.php";
require "item.php";
require "ecommerce.php";

$ecomm = new Ecommerce;

if(isset($_GET["action"])){
  if ($_GET["action"] === "productos"){
    foreach($ecomm->getProducts() as $product){
      echo $producto->getPrice() . "<br>"
    }
  } else if ($_GET["action"] === "comprar"){
    // producto que esta en el catalogo;
    $ecomm->addProduct($producto);
  }
}






 ?>
