<?php

  class Market extends AnotherClass
  {

    private $catalogo = [];
    private $carrito;
    private $usuario

    function __construct()
    {
      for ($i=0; $i < rand(20,30) ; $i++) {
        $this->catalog[] = new Producto();
      }

      $this->carrito = new Carrito;

    }




  }

$essecial = new Market;
 ?>
