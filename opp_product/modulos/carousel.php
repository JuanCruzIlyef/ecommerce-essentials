<?php


class carousel {

private $slides = [];


public function getSlides(){
  for ($i = 0; $i < rand(1, 5); $i++){
    $slide = new Slide;
    $slide->setUrl("https://placehold.co/600x400/random/random/png");
    $this->slides[] = $slide;
  }
  return $this->slides;
}

}


 ?>
