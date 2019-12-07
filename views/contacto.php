<!DOCTYPE html>
<html lang="en">
<head>
  <?php require ('views/head.php'); ?>
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-home">
<header>
  <?php require ("views/navbar.php"); ?>
</header>
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-12 mt-md-0 mt-3" id="contactanos">
        <h4><u>Contactanos</u></h4>
        <p>Envianos tu mensaje. Queremos saber de vos.</p>
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <label for="Nombre"></label>
              <input type="text" name="Nombre" id="Nombre" value="" placeholder="Nombre">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="email"></label>
              <input type="email" name="Email" id="Email" value="" placeholder="E-mail">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Telefono"></label>
              <input type="tel" name="Telefono" id="Telefono" value="" placeholder="Teléfono">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Asunto"></label>
              <input type="text" name="Asunto" id="Asunto" value="" placeholder="Asunto">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Mensaje"></label>
              <textarea name="Mensaje" rows="8" cols="80" placeholder="Comentarios"></textarea>
            </div>
            <div class="col-lg-12 col-md-12">
              <input type="submit" name="" id="" value="Enviar">
            </div>
          </div>
        </form>
        <br><br>
      </div>
      </div>
      </div>
      <footer class="page-footer font-small blue pt-4">
          <?php  require ("views/footer.php"); ?>
      </footer>
      <?php require 'views/scripts.php'; ?>
    </body>

      </html>
