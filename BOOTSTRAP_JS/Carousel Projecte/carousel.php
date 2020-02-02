<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Table JSON</title>
  </head>
  <body>
    <?php require_once 'DB.php' ?>
    <?php $res = DB::getBasicInfoOffersByUsername('admin');?>
    <h1>My offers</h1>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php foreach ($res as $key => $value): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>"></li>
          <?php endforeach ?>
        </ol>
        <div class="carousel-inner">
          <?php foreach ($res as $key => $value): ?>
            <div class="carousel-item <?php if ($key == 0) echo "active" ?>">
              <img class="d-block w-100" src="/img/<?php echo $value["img"] ?>" class="active" <?php if ($key == 0) echo 'class="active"' ?>>
              <div class="carousel-caption d-none d-md-block">
                <div style="background-color: rgba(255, 255, 255, 0.8)">
                <h5 class="text-dark"><?php echo $value["Title"] ?><h5>
                <p class="text-dark"><?php echo $value["Description"] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
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
    </div>
  </body>
</html>
