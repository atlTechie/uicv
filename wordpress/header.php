<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags-->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>E. Wright Portfolio</title>
  <?php wp_head(); ?>
</head>
<body data-barba="wrapper" <?php body_class(); ?>> 
  <header> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid"><a class="navbar-brand" href="./index.html"><img class="img-fluid w-25" src="./images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./work.html">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="./website-pricing.html">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="./contact.html">Contact</a></li>
            <li class="nav-item"><a class="btn btn-primary" href="./inquiries.html">Get An Estimate</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>