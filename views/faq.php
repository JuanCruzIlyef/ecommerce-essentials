<!DOCTYPE html>
<html lang="en">
<head>
  <?php require ('head.php'); ?>
  <title>Home</title>
  <style>
    .bg-home{
      background-image: url(assets/textura02.jpg");
      background-repeat: repeat;

    }
  </style>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-home">
<header>
  <?php require ("navbar.php"); ?>
</header>

<!-- FAQ START -->

<main class="FAQ" id="FAQ">
<section class="container">
<div class="row px-1">
  <article class="col-lg-12 col-md-4 bg-light pt-3">


    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Puedo usar la misma crema para el día y para la noche?
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Depende. Durante el día, tu piel está expuesta a los rayos del sol, por lo que es recomendable que por la mañana apliques una crema con factor de protección solar. Por la noche, tu piel se centrará más en la regeneración, por lo que deberías usar una crema cuyos principios activos estén más concentrados y no vayan dirigidos a protegerte del sol. Un exfoliante facial, por ejemplo, siempre deberías usarlo por la noche, pues la posterior exposición al sol podría irritar tu piel y dañarla.      </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Cuál es la rutina ideal para el cuidado de la piel?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Unas pautas básicas marcarán la diferencia de un buen cuidado facial: limpia tu rostro dos veces al día; desmaquilla tu piel antes de irte a dormir, también si no usas maquillaje; a continuación, aplica con un disco de algodón un tónico y después un sérum que llegue a las capas más profundas de la piel. Por último, una crema que aporte la hidratación que tu dermis necesita. ¡Estarás perfecta a la mañana siguiente!</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <p>Si tengo piel grasa, ¿puedo tener falta de hidratación?</p>
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <p>Sí. Puntos negros, poros dilatados, piel gruesa, brillos… Son las características que definen a una piel grasa, sin embargo, puede que sus niveles de hidratación estén bajos. Por tanto, sí, aunque tu piel sea grasa también necesitas hidratarla. :)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <p>Si mi piel es morena, ¿debo usar protección solar?</p>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <p>Siempre. Una de las falsas creencias más extendidas es que las pieles más morenas no necesitan protección solar, porque ya no se queman. Si bien es cierto que cuánto más blanca sea una piel, más protección necesita; sin embargo, también las más oscuras también deben protegerse con un buen fotoprotector.</p>
            </div>
          </div>
        </div>
        <div class="card">

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p>¿Caducan los productos cosméticos?</p>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Debes fijarte en el símbolo dibujado en el envase y en el que se indica los meses útiles del producto y durante los cuales su eficacia está asegurada. A partir de esta fecha, los principios activos del producto pueden deteriorarse y por tanto, dejar de ser eficaces.</p>
                </div>
              </div>
            </div>
            <div class="card">


</section>

</main>
<!-- FAQ END -->
<footer class="page-footer font-small blue pt-4">
    <?php  require ("footer.php"); ?>
</footer>
<?php require 'libraries/scrip'; ?>
</body>

</html>
