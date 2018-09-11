<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="Kamil Nowocień">

  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url'); ?>/css/scrolling-nav.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/form.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


  <?php wp_head(); ?>

</head>

<body id="page-top">
<header class="bg-primary text-white">
JEBAccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccTOoooooooooooooooooooo<?php bloginfo('template_url'); ?>
  <div class="content">
  <div class="logo">
  </div>
  <section class="info">
    <div class="container">
      <h2 class="garage-name">MECHANIKA POJAZDOWA ROBERT SAJNA</h2>
      <div class="stars">
        <input type="radio" name="star" value="5">
        <label for="star1">Five Stars</label>
        <input type="radio" name="star" value="4">
        <label for="star2">Four Stars</label>
        <input type="radio" name="star" value="3">
        <label for="star3">Three Stars</label>
        <input type="radio" name="star" value="2">
        <label for="star4">Two Stars</label>
        <input type="radio" name="star" value="1">
        <label for="star5">One Star</label>
      </div>
      <h3 class="garage-address">
        <i class="fas fa-map-marker-alt pinezka"></i>

        Adres twojego garażu
      </h3>
    </div>

  </section>
  <section class="contact-buttons">
    <div class="container">
    <button class="show-phone-number btn" id="showPhoneBtn" >
      <i class="fas fa-phone"></i>
      <span class="show-number">Wyświetl numer</span>
    </button>

      <a class="appointment-button btn" id="app-btn">UMÓW WIZYTĘ</a>
      <section class="phone-numbers container" id="phoneNum" >
        <article class="phone-container clearfix">
          <span class="phone-type">Telefon komórkowy :</span>
          <a class="phone-number" href="tel:+48503395405">
            <i class="fas fa-phone"></i>
            <span>+48 503 395 405</span>
          </a>
        </article>
        <article class="phone-container down-number clearfix">
          <span class="phone-type">Telefon dodatkowy :</span>
          <a class="phone-number" href="tel:+48503395405">
            <i class="fas fa-phone"></i>
            <span>+48 503 395 405</span>
          </a>
        </article>
      </section>
    </div>

  </section>
  </div>
</header>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#informacje">INFORMACJE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#cennik">CENNIK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#specjalizacja">SPECJALIZACJA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#galeria">GALERIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#opinie">OPINIE</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


