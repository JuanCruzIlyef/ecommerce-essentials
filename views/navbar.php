

 <!--
 Solo se nescesita un Solo li el resto se crea con un
 array asociativo y un foreach dentro de la ul
 -->

 <?php
 require "src/carrito.php";
 require "src/item.php";
 require "src/ecommerce.php";


 $e = new Ecommerce;

 if (isset($_GET['action'])) {

   if ($_GET['action'] === 'products_list') {

     $title = 'Listado de Productos';

     $catalog = $e->getCatalog();

     require 'listar/products_list.php';
     die();
   }


   // var_dump ($e);

   //ruta details

 if ($_GET['action'] === 'product-detail') {

   $title = 'Listado de Productos';

   $product = $e->findProduct($_POST['id']);

   require 'listar/products_detail.php';
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

       require 'listar/products_list.php';

       die();
   }
  ?>

<?php require_once 'data/menu.php'; ?>


 <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success p-1 ">
   <a class="navbar-brand" href="#">
     <i class="fas fa-leaf"></i>
     Essencials</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
     <ul class="navbar-nav ml-auto mt-2 mt-lg-4 pr-md-5">
       <?php foreach ($links as $link):  ?>
         <li class="nav-item active">
           <a class="nav-link" href="<?= $link["url"] ?>"><?= $link["text"] ?></a>
         </li>
       <?php endforeach ?>

       <form class="form-inline my-2 my-lg-0" method="GET" action="?action=search">
    <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
  </form>

  <?php if (isset($_GET['action']) && $_GET['action']== 'products_list') : ?>


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



       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu">
          <?php if(isset($_SESSION["usuario"])) :?>
            <a class="dropdown-item" href="?views=perfil">Mi perfil</a>
            <a class="dropdown-item" href="logout.php">Salir</a>
       <?php else : ?>
          <a class="dropdown-item" href="?views=login">Ingresar</a>
          <a class="dropdown-item" href="?views=registro">Registrarse</a>
        <?php endif; ?>
        </div>
      </li>
     </ul>
   </div>
 </nav>
