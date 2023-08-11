<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowa Casa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/style.css" />    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    

<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 py-5">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url('/home'); ?>"><span class="navbar-brand-logo">Nav</span>bar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse py-5" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('/home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/about-me'); ?>">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>