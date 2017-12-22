<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
  <script src="https://use.fontawesome.com/301454fa18.js"></script>

  <?= css('assets/css/base.css') ?>
  <?= js('assets/js/main.js') ?>

</head>
<body>
<div class="container-fluid no-padding">

  <div class="mobile-menu header-contact d-sm-none d-flex justify-content-center">
    
    <a class="position-absolute" onclick="openSlider()">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <img class="img-fluid" src="./assets/images/EleganceLogo.png" />
  </div>

  <div class="position-absolute header-contact d-none d-sm-block">
    
    <p><i class="fa fa-phone text-primary" aria-hidden="true"></i> 0115 964 1642 <span>|</span> <i class="fa fa-envelope-o text-primary" aria-hidden="true"></i> info@elegancebydesign.co.uk</p>
  </div>
  <header class="container header wrap wide" role="banner">
    <div class="grid d-none d-sm-block">
      <div class="d-flex justify-content-center logo">
        <img class="img-fluid" src="./assets/images/EleganceLogo.png" />
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
