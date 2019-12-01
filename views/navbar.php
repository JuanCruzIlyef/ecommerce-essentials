

 <!--
 Solo se nescesita un Solo li el resto se crea con un
 array asociativo y un foreach dentro de la ul
 -->
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
