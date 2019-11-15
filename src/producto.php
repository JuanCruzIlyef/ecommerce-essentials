<?php


class productos {

private $nombre;
private $id;
private $categoria;
private $stock;
private $descripcion;
private $precio;
private $imgen;
private $calificacion;


public function __construct($nombre,$id,$categoria,$stock,$descripcion,$precio,$imgen,$calificacion)
{
  $this->nombre = $nombre;
  $this->nombre = $id;
  $this->nombre = $categoria;
  $this->nombre = $stock;
  $this->nombre = $descripcion;
  $this->nombre = $precio;
  $this->nombre = $imagen;
  $this->nombre = $calificacion;

}
 public function setNombre ($value){
     $this->nombre = $value["nombre"];
 }
 public function getNombre (){
     return $this->nombre:
 }

 public function setNombre ($value){
     $this->nombre = $value["id"];
 }
 public function getNombre (){
     return $this->id:
 }

 public function setNombre ($value){
     $this->nombre = $value["categoria"];
 }
 public function getNombre (){
     return $this->categoria:
 }

 public function setNombre ($value){
     $this->nombre = $value["stock"];
 }
 public function getNombre (){
     return $this->stock:
 }

 public function setNombre ($value){
     $this->nombre = $value["descripcion"];
 }
 public function getNombre (){
     return $this->descripcion:
 }

 public function setNombre ($value){
     $this->nombre = $value["precio"];
 }
 public function getNombre (){
     return $this->precio:
 }
 public function setNombre ($value){
     $this->nombre = $value["imagen"];
 }
 public function getNombre (){
     return $this->imagen:
 }

 public function setNombre ($value){
     $this->nombre = $value["calificacion"];
 }
 public function getNombre (){
     return $this->calificacion:
 }




      <?php foreach ($productos as $producto){
             if ($producto["id"] == $id) {
               return $producto;
             }
           }

           return

           ?>


}


 ?>
