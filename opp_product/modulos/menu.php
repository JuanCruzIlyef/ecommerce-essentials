<?php


  class menu {

  private $links = [];


  public function getLinks(array $rutas){
    for ($i = 0; $i < count($rutas); $i++){
      $link = new link;
      $link->setUrl("/".$rutas[$i]);
      $this->links[] = $link;
    }
    return $this->links;
  }

  }


 ?>
