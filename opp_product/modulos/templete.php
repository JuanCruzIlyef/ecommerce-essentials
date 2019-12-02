<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php  foreach ($carousel->getSlides() as $key => $slide) : ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?=  $key ?>" class="<?= ($key == 0) ? "active" : null ?>"></li>
    <?php endforeach; ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach ($carousel->getSlides() as $key => $slide) : ?>
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
