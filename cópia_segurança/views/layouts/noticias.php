<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Explo Expo | Notícias</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=site_url()?>resources/noticias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=site_url()?>resources/noticias/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?=site_url()?>resources/noticias/css/clean-blog.min.css" rel="stylesheet">
  <link rel="icon" href="<?=site_url()?>resources/site/images/explologo.png"  type="image/png">
    <!-- COmpartilhar Butões Sociais API -->
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a8c532f992ac400137606e5&product=inline-share-buttons"></script>
  </head>

  <body style="background-color: #e6eaee;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?=site_url()?>">Explo Expo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url()?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url()?>#location">Patrocine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url()?>#registration">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?=site_url()?>resources/site/images/fundo.jpeg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1 class="text-center">Explo Expo Notícias</h1>
              <h2 class="subheading text-center">Notícias Atualizadas</h2>

            <!--   <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2018</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>

<?php require $view.".php" ?>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
   <!--          <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul> -->
            <p class="copyright text-muted">Copyright 2017 &copy; - Desenvolvido por <a href="http://www.geminiweb.com.br" target="_blank">Gemini Web Floripa <i class="fa fa-whatsapp" aria-hidden="true"></i> 48 99143-7388</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=site_url()?>resources/noticias/vendor/jquery/jquery.min.js"></script>
    <script src="<?=site_url()?>resources/noticias/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
