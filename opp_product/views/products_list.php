<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title><?= $title ?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        
<h1><?= $title ?></h1>

  <ul>
      <?php foreach($catalog as $product): ?>

        <li>
        

        <div class="card" style="width: 18rem;" >
<a href="?action=products_list&producto=item">
        <img src="https://thefruitcompany.es/wp-content/uploads/2018/06/TFC_Cosmetica_Crema_de_manos_Pi%C3%B1a.png"class="card-img-top" alt="...">
</a> 

<div class="card-body">

<?php if( $product->getCalificacion() > 0 ) :?>
    <h4>
        <?php for( $i = 0 ; $i < $product->getCalificacion(); $i++ ):?>
            <i class="text-warning fas fa-star"></i>
        <?php endfor; ?>
    </h4>
<?php endif;?>
<!--precio y titulo-->

<h5> <?= $product->getTitle() ?> </h5>
<h5> <?= $product->getPrice()?> </h5>

<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        

 <form action="?action=product-detail" method="post">
    <input type="hidden" name="id" value="<?= $product->getId()?>">
    <button type="submit" >ver detalle</button>
    </form>

    </li>

</div>
</div>
    <?php endforeach ?>
    
    </ul>


        </div>
    </div>
</div>

</body>
</html>