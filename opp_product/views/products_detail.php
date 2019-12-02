<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title><?= $product->getTitle() ?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        
        <h1><?=$product->getTitle() ?></h1>
    


    <li>
    
    <div class="card mb-3" style="max-width: 900px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://thefruitcompany.es/wp-content/uploads/2018/06/TFC_Cosmetica_Crema_de_manos_Pi%C3%B1a.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">

        <h5 class="card-title"><?=$product->getTitle() ?></h5>


        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

        <a href="#"class="btn btn-primary">Comprar</a>
    </li>



        </div>
    </div>
</div>
    
</body>
</html>