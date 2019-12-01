<?php
require 'actions/Registro.php';
?>

<main class="container-fluid p-4 m-8">

  <div class="row">
    <div class="col-12 col-md-6 mx-md-auto bg-success p-5 my-5">
      <h3 class="text-center text-light"><u>Registrarse<u></h3>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6 mx-md-auto p-0">
        <form action="?views=registro" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input class="form-control" id="name" type="text" name="name" value="<?= $_POST["name"] ?? null  ?>" placeholder="Nombre">
            <?php if(isset($errors["name"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["name"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="email" type="email" name="email" value="<?= $_POST["email"] ?? null  ?>" placeholder="E-mail">
            <?php if(isset($errors["email"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["email"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="password"type="password" name="password" value="" placeholder="Contraseña">
            <?php if(isset($errors["password"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["password"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="password" type="password" name="password_confirmation" value="" placeholder="Confirmar contraseña">
            <?php if(isset($errors["password_confirmation"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["password_confirmation"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-row">
            <div class="form-group mx-auto">
              <button class="btn  btn-success" type="submit">
                Enviar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
