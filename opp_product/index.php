<?php
require "src/carrito.php";
require "src/item.php";
require "src/ecommerce.php";


$e = new Ecommerce;

if (isset($_GET['action'])) {
  
  if ($_GET['action'] === 'products_list') {
  
    $title = 'Listado de Productos';    

    $catalog = $e->getCatalog();   

    require 'views/products_list.php';  
    die();
  }
  
  
  // var_dump ($e);

  //ruta details

if ($_GET['action'] === 'product-detail') {
    
  $title = 'Listado de Productos';    

  $product = $e->findProduct($_POST['id']);   
  
  require 'views/products_detail.php';
  die();
  }
  


  
  
  else if ($_GET['action'] == 'comprar'){
     /*producto que esta en el catalogo */ 
    // $ecomm->addProduct($producto);
  }
}

    //ruta para hacer busqueda

    if (isset($_GET['query'])){

      $title = 'resultados de busqueda';

      $catalog = $e->searchProducts($_GET['query']); 

      require 'views/products_list.php';

      die();
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>MARCA</title>
  </head>
  <body>

    <?php
    require "modulos/carousel.php";
    require "modulos/slide.php";
    require "modulos/menu.php";
    require "modulos/link.php";

  

    $carousel = new Carousel;
    $slides = $carousel->getSlides();


    $menu = new Menu;
    $links = $menu->getLinks(["home","link","index"]);
    ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="#">Essencials</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <form class="form-inline my-2 my-lg-0" method="GET" action="?action=search">
            <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        

          <?php foreach ($links as $item): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $item->getUrl(); ?>">
                <?= $item->getUrl(); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>




  <?php if (isset($_GET['action']) && $_GET['action']== 'products_list') : ?>


    <div class="container">
    <div class="row">
        <div class="col">
        
<h1><?= $title ?></h1>

  <ul>
      <?php foreach($catalog as $product): ?>
      
<!--localizar-->
        <li>
        
        <a href="?action=product-detail&id=<?= $product->getId?> "></a>

            <?= $product->getTitle() ?> - <?= $product->getPrice()?></li>
        </a>

        <?php endforeach;?>
    
    </ul>

        </div>
    </div>
</div>

      <?php endif; ?>


<!--carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php foreach ( $slides as $key => $slide) : ?>


          <li data-target="#carouselExampleIndicators" data-slide-to="<?=  $key ?>" class="<?= ($key == 0) ? "active" : null ?>"></li>

        <?php endforeach; ?>


      </ol>
      <div class="carousel-inner">
        <?php foreach ($slides as $key => $slide) : ?>
          <div class="carousel-item <?=  ($key == 0) ? "active" : null ?>">
            <img class="d-block w-100" src="<?= $slide->getUrl()  ?>" alt="First slide">
          </div>
        <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<!--JUMBO-->

    <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
