<?php


class Producto {

private $id;
private $nombre;
private $categoria;
private $stock;
private $descripcion;
private $price;
private $imgen;
private $calificacion;
private $title;


public function __construct($id,$price,$title,$calificacion = 4)
{

  $this->id = $id;

  $this->price = $price;

  $this->title= $title;

  $this->calificacion = $calificacion;

}


public function setTitle(string $title){
    $this->title = $title;

    return $this;
}

public function getTitle(){
    return $this->title;
}

 public function setNombre ($nombre){
     $this->nombre = $nombre["nombre"];
 }
 public function getNombre (){
     return $this->nombre;
 }

 public function setId ($id){
     $this->id = $id["id"];
 }
 public function getId (){
     return $this->id;
 }

 public function setCategoria ($categoria){
     $this->categoria = $categoria["categoria"];
 }
 public function getCategoria (){
     return $this->categoria;
 }

 public function setStock ($stock){
     $this->stock = $stock["stock"];
 }
 public function getStock (){
     return $this->stock;
 }

 public function setDescripcion ($descripcion){
     $this->descripcion = $desripcion["descripcion"];
 }
 public function getDescripcion (){
     return $this->descripcion;
 }


 public function setPrice(float $price)
 {
     $this->price = $price;

     return $this;
 }

 public function getPrice()
 {
     return $this->price;
 }


 public function setImagen ($imagen){
     $this->imagen = $imagen["imagen"];
 }
 public function getImagen (){
     return $this->imagen;
 }

 public function setCalificacion ($calificacion){
     $this->calificacion = $calificacion;
     return $this;
 }
 public function getCalificacion (){
     return $this->calificacion;
 }

}

 ?>
